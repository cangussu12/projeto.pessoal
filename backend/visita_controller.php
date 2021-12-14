<?php

    require "./backend/visita_model.php";
    require "./backend/visita_service.php";
    require "./backend/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    //echo '<pre>';
   // print_r($acao);
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
    
    } else if ($acao == 'remover') {

      $visita = new Visita();
      $visita->__set('id', $_GET['id']);

      $conexao = new Conexao();
      $visitaService = new VisitaService($conexao, $visita);
      $visitaService->remover();

      header('Location: index.php');

    } else if ($acao == 'atualizar') {

      $visita = new Visita();

      $visita->__set('id', $_POST['id'])
              ->__set('visita', $_POST['visita'])
                ->__set('nome', $_POST['nome'])
                  ->__set('telefone', $_POST['telefone'])
                    ->__set('descricao', $_POST['descricao'])
                      ->__set('data_visita', $_POST['data_visita']);

      $conexao = new Conexao();

      $visitaService = new VisitaService($conexao, $visita);
      if($visitaService->atualizar()) {
        header('location: index.php');
      } 

    } else if ($acao == 'marcarRealizada') {

      $visita = new Visita();
      $visita->__set('id', $_GET['id'])->__set('id_status', 2);
  
      $conexao = new Conexao();
      
      $visitaService = new VisitaService($conexao, $visita);
      $visitaService->marcarRealizada();
  
      header('location: index.php');
    }



?>
