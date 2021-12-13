<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	</head>

	<body>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://crbconstrutora.com.br/wp-content/uploads/2016/08/CRB-Logo-2.png" alt="" width="125" height="40">
                </a>
                <a>Estudo sobre PHP com PDO.</a>
            </div>
        </nav>

		<?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Tarefa inserida com sucesso!</h5>
			</div>
		<?php } ?>
		<br />
		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Visitas pendentes</a></li>
						<li class="list-group-item active">Nova visita</li>
						<li class="list-group-item"><a href="todas_tarefas.php">Visitas realizadas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Nova visita</h4>
								<hr />

								<form method="post" action="visita_controller.php?acao=inserir">
									<div class="form-group">
										<div class="input-group mb-2">
											<div class="mb-1">
												<input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome completo">
											</div>
											<div class="mb-1" style="padding-left: 10px;">
												<input class="form-control" style="padding-left: 10px; width: 205px;" name="data_visita" type="date" value="2021-12-12">
                                        	</div>
										</div>
										<div class="input-group mb-1">
											<div class="mb-1">
												<input name="visita" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Stand">
											</div>
										</div>
										<div class="input-group mb-1">
											<div class="mb-1">
												<input name="telefone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Telefone">
											</div>
										</div>
										<div class="input-group mb-2">
											<div class="input-group">
												<span class="input-group-text">Descrição</span>
												<textarea name="descricao" class="form-control" aria-label="Digite aqui..."></textarea>
											</div>
										</div>
									</div>

									<button class="btn btn-success">Cadastrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>