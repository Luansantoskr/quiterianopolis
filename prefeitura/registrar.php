<?php
	require_once "classes/conexao.php";
	$obj = new conectar();
	$conexao = $obj->conexao();

	$sql = "SELECT * from usuarios where email='admin'";
	$result = mysqli_query($conexao, $sql);

	$validar = 0;
	if(mysqli_num_rows($result) > 0){
		header("location:index.php");
	}

?>


 <!DOCTYPE html>
<html>
<head>
	<title>Registrar Usuário</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<script src="lib/jquery-3.2.1.min.js"></script>
	<script src="js/funcoes.js"></script>

</head>
		<body>
					<header id="header">
							
                        <a href="index.html" class="logo"><strong>Prefeitura de Quiterianópolis</strong></a>

							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Registrar usuário</h1>
										</header>	
									</div>
                                </section>
					
								<div class="container">
									<div class="row">
										<div class="col-sm-4"></div>
											<div class="col-sm-4">
												<div class="panel panel-danger">
													<div class="panel panel-body">
														<form id="frmRegistro">
															<label>Nome</label>
															<input type="text" class="form-control input-sm" name="nome" id="nome">
															<label>Usuário</label>
															<input type="text" class="form-control input-sm" name="usuario" id="usuario">
															<label>Email</label>
															<input type="text" class="form-control input-sm" name="email" id="email">
															<label>Senha</label>
															<input type="password" class="form-control input-sm" name="senha" id="senha">
															<p></p>
																<span class="button button2" id="registro">Registrar</span>
																<a href="index.php" class="button button2">Voltar Login</a>
														</form>
													</div>
												</div>
											</div>
										<div class="col-sm-4"></div>
									</div>
								</div>

												<script src="assets/js/jquery.min.js"></script>
												<script src="assets/js/browser.min.js"></script>
												<script src="assets/js/breakpoints.min.js"></script>
												<script src="assets/js/util.js"></script>
												<script src="assets/js/main.js"></script>
</body>
	
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){

			vazios=validarFormVazio('frmRegistro');

			if(vazios > 0){
				alert("Preencha os Campos!!");
				return false;
			}

			dados=$('#frmRegistro').serialize();
			
			$.ajax({
				type:"POST",
				data:dados,
				url:"procedimentos/login/registrarUsuario.php",
				success:function(r){
					alert(r);

					if(r==1){
						alert("Inserido com Sucesso!!");
					}else{
						alert("Erro ao Inserir");
					}
				}
			});
		});
	});
</script>
