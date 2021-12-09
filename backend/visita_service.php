<?php


//CRUD
class VisitaService {

	private $conexao;
	private $tarefa;

	public function __construct(Conexao $conexao, Visita $visita) {
		$this->conexao = $conexao->conectar();
		$this->visita = $visita;
        
	}

    public function recuperar() { //read
		$query = '
			select 
				t.id, s.status, t.tarefa 
			from 
				tb_tarefas as t
				left join tb_status as s on (t.id_status = s.id)
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}