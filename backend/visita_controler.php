<?php

    require "../backend/visita_model.php";
    require "../backend/visita_controler.php";

    //$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    //echo '<pre>';
    //print_r($acao);
    //echo '</pre>';


    if($acao == 'recuperar') {
		
		$tarefa = new Visita();
		$conexao = new Conexao();

		$tarefaService = new VisitaService($conexao, $tarefa);
		$tarefas = $tarefaService->recuperar();
    }



?>
