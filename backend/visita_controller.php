<?php

    require "./backend/visita_model.php";
    require "./backend/visita_service.php";
    require "./backend/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    //echo '<pre>';
    //print_r($acao);
    //echo '</pre>';


    if($acao == 'recuperar') {
		
		$visita = new Visita();
		$conexao = new Conexao();

		$visitaService = new VisitaService($conexao, $visita);
		$visitas = $visitaService->recuperar();
    
    } else if($acao == 'inserir' ) {
      $visita = new Visita();
      $visita->__set('visita', $_POST['visita']);
      $visita->__set('nome', $_POST['nome']);
      $visita->__set('telefone', $_POST['telefone']);
      $visita->__set('descricao', $_POST['descricao']);
      $visita->__set('data_visita', $_POST['data_visita']);
  
      $conexao = new Conexao();
  
      $visitaService = new VisitaService($conexao, $visita);
      $visitaService->inserir();
  
      header('Location: nova_visita.php?inclusao=1');
    
    }



?>
