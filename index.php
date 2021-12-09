<?php

	//require "./backend/visita_controler.php";
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
                        <li class="list-group-item">Nova visita</li>
                        <li class="list-group-item">Visitas realizadas</li>

                    </ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Visitas pendentes</h4>
								<hr />	
										<div class="row mb-3 d-flex align-items-center tarefa">
											<div class="col-sm-9">
											</div>
											<div class="col-sm-3 mt-2 d-flex justify-content-between">
												<i class="fas fa-trash-alt fa-lg text-danger"></i>
													<i class="fas fa-edit fa-lg text-info"></i>
													<i class="fas fa-check-square fa-lg text-success"></i>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

</body>
</html>