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
	<link rel="stylesheet" href="./backend//estilo.css">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
				<img src="logo.png" alt="" width="40" height="40"> Leonardo Cangussu
            </a>
            <a>Estudo sobre PHP com PDO.</a>
        </div>
    </nav>
	<script>

		function remover (id) {
			location.href = 'index.php?acao=remover&id='+id;
		}

		function editar(id, txt_visita, txt_nome, txt_telefone, txt_descricao, txt_data) {
				//criar um form de edição
				let form = document.createElement('form')
				form.action = 'visita_controller.php?acao=atualizar'
				form.method = 'post'
				form.className = 'row'

				//criar um input para entrada do texto
				let inputVisita = document.createElement('input')
				inputVisita.type = 'text'
				inputVisita.name = 'visita'
				inputVisita.className = 'col-9 form-control'
				inputVisita.value = txt_visita

				//criar um input para entrada do nome
				let inputNome = document.createElement('input')
				inputNome.type = 'text'
				inputNome.name = 'nome'
				inputNome.className = 'col-9 form-control'
				inputNome.value = txt_nome

				//criar um input para entrada do telefone
				let inputTelefone = document.createElement('input')
				inputTelefone.type = 'text'
				inputTelefone.name = 'telefone'
				inputTelefone.className = 'col-9 form-control'
				inputTelefone.value = txt_telefone

				//criar um input para entrada da descrição
				let inputDescricao = document.createElement('input')
				inputDescricao.type = 'text'
				inputDescricao.name = 'descricao'
				inputDescricao.className = 'col-9 form-control'
				inputDescricao.value = txt_descricao

				//criar um input para entrada da data
				let inputData = document.createElement('input')
				inputData.type = 'date'
				inputData.name = 'data_visita'
				inputData.className = 'col-9 form-control'
				inputData.value = txt_data

				//criar um input hidden para guardar o id da visita
				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = id

				//criar um button para envio do form
				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'col -3 btn btn-info'
				button.innerHTML = 'Atualizar'

				//incluir inputTarefa no form
				form.appendChild(inputVisita)
				form.appendChild(inputNome)
				form.appendChild(inputTelefone)
				form.appendChild(inputDescricao)
				form.appendChild(inputData)

				//incluir inputId no form
				form.appendChild(inputId)

				//incluir button no form
				form.appendChild(button)

				//teste
				//console.log(form)

				//selecionar a div tarefa
				let visita = document.getElementById('visita_'+id)
				let nome = document.getElementById('nome_'+id)
				let telefone = document.getElementById('telefone_'+id)
				let descricao = document.getElementById('descricao_'+id)
				let data_visita = document.getElementById('data_'+id)

				//limpar o texto da tarefa para inclusão do form
				visita.innerHTML = ''
				nome.innerHTML = ''
				telefone.innerHTML = ''
				descricao.innerHTML = ''
				data_visita.innerHTML = ''

				//incluir form na página
				visita.insertBefore(form, visita[0])
				nome.insertBefore(form, nome[0])
				telefone.insertBefore(form, telefone[0])
				descricao.insertBefore(form, descricao[0])
				data_visita.insertBefore(form, data_visita[0])

			}

	</script>
</head>
<body>
    <br />
        <div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="index.php">Visitas pendentes</a></li>
                        <li class="list-group-item"><a href="nova_visita.php">Nova Visita</a></li>
                        <li class="list-group-item active" aria-current="true">Visitas realizadas</li>

                    </ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Visitas realizadas</h4>
								<hr />	

									<?php foreach ($visitas as $row => $value) { ?>
                                        <?php if ($value->status == 'realizado') { ?>
                                            <div class="card" style="background-color: #e6ffe6;">
                                                <div class="card-header" id="visita_<?= $value->id ?>">
                                                    <a style="background-color:#ff7c4d; border-radius: 4px; padding-left: 6px;"> <b><?=$value->visita ?></b> </a> <a style="padding-left: 10px;"> </a> <a style="background-color:white; border-radius: 4px; padding-left: 2px; color:black; text-align:center; ; font-size:16px"><?=$value->data_visita ?></a>
                                                    <div style="text-align:right">
                                                            <i onclick="remover(<?= $value->id ?>)" class="fas fa-trash-alt fa-lg text-danger"></i>
                                                    </div>
                                                </div>
                                                
                                                <div class="card-body" id="visita_<?= $value->id ?>">
                                                    <h5 id="nome_<?= $value->id ?>"class="card-title"><?=$value->nome ?></h5>
                                                    <p id="telefone_<?= $value->id ?>"><?=$value->telefone?></p>
                                                    <p id="descricao_<?= $value->id ?>" class="card-text"><?=$value->descricao ?></p>
                                                    <p id="data_<?= $value->id ?>"></p>

                                                </div>
                                                <a style="text-align: right; padding-right: 10px; font-size: 11px;"><b>Data de criação:</b> <?=$value->data_cadastrado?></a>
                                            </div>
                                            <br />
                                            <?php } ?>
									<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

</body>
</html>