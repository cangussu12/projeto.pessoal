<?php
	$acao = 'recuperar';
	require "visita_controller.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Pessoal</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://crbconstrutora.com.br/wp-content/uploads/2016/08/CRB-Logo-2.png" alt="" width="125" height="40">
            </a>
            <a>Estudo sobre PHP com PDO.</a>
        </div>
    </nav>

</head>
<body>
    <br />
        <div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">Visitas pendentes</li>
                        <li class="list-group-item"><a href="nova_visita.php">Nova Visita</a></li>
                        <li class="list-group-item">Visitas realizadas</li>

                    </ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Visitas pendentes</h4>
								<hr />	

									<?php foreach ($visitas as $row => $value) { ?>
									<div class="card">
										<div class="card-header">
											<a style="background-color:#ff7c4d; border-radius: 4px; padding-left: 6px;"> <b><?=$value->visita ?></b> </a> <a style="padding-left: 10px;"> </a> <a style="background-color:#d9d9d9; border-radius: 4px; padding-left: 2px; color:black; text-align:center; ; font-size:16px"><?=$value->data_visita ?></a>
										</div>
										<div class="card-body">
											<h5 class="card-title"><?=$value->nome ?></h5>
											<p class="card-text"><?=$value->descricao ?></p>

											<div class="col-sm-3 mt-2 d-flex justify-content-between">
												<i class="fas fa-trash-alt fa-lg text-danger"></i>
													<i class="fas fa-edit fa-lg text-info"></i>
													<i class="fas fa-check-square fa-lg text-success"></i>
										</div>
										</div>
									</div>
									<br />
									<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

</body>
</html>