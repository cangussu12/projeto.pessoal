<?php


//CRUD
class VisitaService {

	private $conexao;
	private $visita;

	public function __construct(Conexao $conexao, Visita $visita) {
		$this->conexao = $conexao->conectar();
		$this->visita = $visita;
        
	}

    public function recuperar() { //read
		$query = '
		select 
		t.id, s.status, t.visita, t.nome, t.descricao, t.telefone, t.corretor, t.data_visita, t.data_cadastrado 
			from 
		tb_visitas as t
			left join tb_status as s on (t.id_status = s.id) ORDER BY t.id DESC
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function inserir() { //create
		$query = 'insert into tb_visitas (nome, visita, telefone, descricao, data_visita)values(:nome, :visita, :telefone, :descricao, :data_visita)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->visita->__get('nome'));
		$stmt->bindValue(':visita', $this->visita->__get('visita'));
		$stmt->bindValue(':telefone', $this->visita->__get('telefone'));
		$stmt->bindValue(':descricao', $this->visita->__get('descricao'));
		$stmt->bindValue(':data_visita', $this->visita->__get('data_visita'));
		$stmt->execute();
	}

	public function remover() { //delete
		$query = 'delete from tb_visitas where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->visita->__get('id'));
		$stmt->execute();
	}

	public function atualizar() { //update

		$query = "update tb_visitas set visita = :visita where id = :id;
		update tb_visitas set nome = :nome where id = :id;
		update tb_visitas set telefone = :telefone where id = :id;
		update tb_visitas set descricao = :descricao where id = :id;
		update tb_visitas set data_visita = :data_visita where id = :id;
		
		";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':visita', $this->visita->__get('visita'));
		$stmt->bindValue(':id', $this->visita->__get('id'));
		$stmt->bindValue(':nome', $this->visita->__get('nome'));
		$stmt->bindValue(':telefone', $this->visita->__get('telefone'));
		$stmt->bindValue(':descricao', $this->visita->__get('descricao'));
		$stmt->bindValue(':data_visita', $this->visita->__get('data_visita'));
		return $stmt->execute(); 
	}

	public function marcarRealizada() { //update

		$query = "update tb_visitas set id_status = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->visita->__get('id_status'));
		$stmt->bindValue(2, $this->visita->__get('id'));
		return $stmt->execute(); 
	}
}