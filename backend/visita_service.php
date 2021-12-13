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
		t.id, s.status, t.visita, t.nome, t.descricao, t.telefone, t.corretor, t.data_visita 
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
}