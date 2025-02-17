<?php
	require_once "classes/conexao.php";
	$obj = new conectar();
	$conexao = $obj->conexao();

	$sql = "SELECT * from usuarios where email='admin'";
	$result = mysqli_query($conexao, $sql);

	$validar = 0;
	if(mysqli_num_rows($result) > 0){
		$validar = 1;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
                                                <h1>Logar-se</h1>
                                            </header>	
                                        </div>
                                    </section>      
                        
                        <form id="frmLogin">
							<label>Email</label>
							<input type="text" class="form-control input-sm" name="email" id="email">
							<label>Senha</label>
							<input type="password" name="senha" id="senha" class="form-control input-sm">
							<p></p>
							<span class="button button2" id="entrarSistema">Entrar</span>
							<?php if(!$validar): ?>
							<a href="registrar.php" class="btn btn-danger btn-sm">Registrar</a>

							<?php 
								endif;
							 ?>
							
						</form>

                        <script src="assets/js/jquery.min.js"></script>
			            <script src="assets/js/browser.min.js"></script>
			            <script src="assets/js/breakpoints.min.js"></script>
			            <script src="assets/js/util.js"></script>
			            <script src="assets/js/main.js"></script>
            </body>
	
        </html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){

		vazios=validarFormVazio('frmLogin');

			if(vazios > 0){
				alert("Preencha os campos!!");
				return false;
			}

		dados=$('#frmLogin').serialize();
		$.ajax({
			type:"POST",
			data:dados,
			url:"procedimentos/login/login.php",
			success:function(r){
				//alert(r);
				if(r==1){
					window.location="view/inicio.php";
				}else{
					alert("Acesso Negado!!");
				}
			}
		});
	});
	});
</script>