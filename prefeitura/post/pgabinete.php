<?php 

	session_start();
	if(isset($_SESSION['usuario'])){

 ?>

<!DOCTYPE html>
<html>
<head>
		<title>Prefeitura de Quiterianópolis</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
</head>
<body class="is-preload"style="background-color: hsla(89, 43%, 51%, 0.3)">
			<div id="wrapper">
           
					<div id="main">
						<div class="inner">
						        <header id="header">
							
                                    <a href="../index.php" class="logo"><strong>Prefeitura de Quiterianópolis</strong></a>

									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
							
							<section>
							<h3>Informações</h3>
									<form action="postar.php" enctype="multipart/form-data">
										<label>CNPJ</label>
											<input type="text" name="cnpj">
										<label>Telefone</label>
											<input type="text" id="telefone" name="telefone">
										<label>Email</label>
											<input type="text" name="email">
										<label>Horário de funcionamento</label>
											<input type="text" name="funcionamento">
										<label>Endereço</label>
											<input type="text" name="endereco">
										<label>Nome</label>
											<input type="text" name="nomeG">
										<label>Cargo</label>
											<input type="text" name="cargoG">
										<label>período</label>
											<input type="text" name="periodoG">
										<label>Amparo legal</label>
											<input type="text" name="amparoG">
										<label>Matrícula</label>
											<input type="text" name="matriculaG"><br>
										<input type="submite" class="button button2" value="Adicionar">
									</form> 
                                </section>
								
								<section>
								<h3>Biografia do secretario</h3>
									<form action="postar.php" enctype="multipart/form-data">
										<textarea></textarea> <br>																		
										<input type="submite" class="button button2" value="Adicionar">
									</form> 
                                </section>
								<section>
								<h3>Portarias</h3>
									<form action="postar.php" enctype="multipart/form-data">
										<label>Título</label>
											<input type="text" name="tituloPGa">
										<label>Conteúdo</label>
											<input type="text" id="conteudoPF" name="conteudoPGa">
										<label>Data</label>
											<input type="text" id="conteudoPF" name="dataPGa">	<br>								
										<input type="submite" class="button button2" value="Adicionar">
									</form> 
                                </section>
								<section>
								<h3>Contratos</h3>
									<form action="postar.php" enctype="multipart/form-data">
										<label>Título</label>
											<input type="text" name="tituloPGa1">
										<label>Conteúdo</label>
											<input type="text" id="conteudoPF" name="conteudoPGa1">
										<label>Data</label>
											<input type="text" id="conteudoPF" name="dataPGa1">	<br>								
										<input type="submite" class="button button2" value="Adicionar">
									</form> 
                                </section>
								<section>
								<h3>Licitações</h3>
									<form action="postar.php" enctype="multipart/form-data">
										<label>Título</label>
											<input type="text" name="tituloPGa2">
										<label>Conteúdo</label>
											<input type="text" id="conteudoPF" name="conteudoPGa2">
										<label>Data</label>
											<input type="text" id="conteudoPF" name="dataPGa2">	<br>								
										<input type="submite" class="button button2" value="Adicionar">
									</form> 
                                </section>
								<section>
								<h3>Processo seletivo</h3>
									<form action="postar.php" enctype="multipart/form-data">
										<label>Título</label>
											<input type="text" name="tituloPGa3">
										<label>Conteúdo</label>
											<input type="text" id="conteudoPF" name="conteudoPGa3">
										<label>Data</label>
											<input type="text" id="conteudoPF" name="dataPGa3">	<br>								
										<input type="submite" class="button button2" value="Adicionar">
									</form> 
                                </section>
								<section>
								<h3>RA</h3>
									<form action="postar.php" enctype="multipart/form-data">
										<label>Título</label>
											<input type="text" name="tituloPGa4">
										<label>Conteúdo</label>
											<input type="text" id="conteudoPF" name="conteudoPGa4">
										<label>Data</label>
											<input type="text" id="conteudoPF" name="dataPGa4">	<br>								
										<input type="submite" class="button button2" value="Adicionar">
									</form> 
                                </section>
								<section>
								<h3>EDTC</h3>
									<form action="postar.php" enctype="multipart/form-data">
										<label>Título</label>
											<input type="text" name="tituloPGa5">
										<label>Conteúdo</label>
											<input type="text" id="conteudoPF" name="conteudoPGa5">
										<label>Data</label>
											<input type="text" id="conteudoPF" name="dataPGa5">	<br>								
										<input type="submite" class="button button2" value="Adicionar">
									</form> 
                                </section>							
								<section>
								<h3>Notícias</h3>
									<form action="postar.php" enctype="multipart/form-data">
										<label>Título</label>
											<input type="text" name="tituloPF">
										<label>Conteúdo</label>
											<input type="text" id="conteudoPF" name="conteudoPF">	<br>								
										<input type="submite" class="button button2" value="Adicionar">
									</form> 
                                </section>
							
						</div>
					</div>

					<div id="sidebar">
						<div class="inner">

						<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li>
											<span class="opener">Prefeitura</span>
											<ul>
												<li><a href="../post/pprefeito.php">Atualizar Prefeito e vice</a></li>
												<li><a href="../post/pgestores.php"> Atualizar Gestores </a></li>
											</ul>
										</li>
										<li>
											<span class="opener">O município</span>
											<ul>
												<li><a href="../post/pdiario.php">Atualizar Diário oficial</a></li>
												<li><a href="../post/pdados.php">Atualizar dados do município</a></li>
												<li><a href="../post/pguia.php">Atualizar guia do município</a></li>
												<li><a href="../post/psimbolos.php">Atualizar símbolos municipais</a></li>
												<li><a href="../post/pveiculos.php">Atualizar veículos</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Secretarias</span>
											<ul>
												<li><a href="../post/pcontroladoria.php">Atualizar Controladoria geral do município</a></li>
												<li><a href="../post/pfundo.php">Atualizar Fundo municipal de saúde</a></li>
												<li><a href="../post/pgabinete.php">Atualizar Gabinete do prefeito</a></li>
												<li><a href="../post/pplanejamento.php">Atualizar Planejamento e gestão de finanças</a></li>
												<li><a href="../post/pprocuradoria.php">Atualizar Procuradoria geral do município</a></li>
												<li><a href="../post/passisSocial.php">Atualizar Secretaria de assistência social</a></li>
												<li><a href="../post/pcultura.php">Atualizar Secretaria de cultura</a></li>
												<li><a href="../post/pempreendedorismo.php">Atualizar Secretaria de desenvolvimento economico e empreendedorismo</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Serviços</span>
											<ul>
												<li><a href="../post/ptransparencia.php">Atualizar Transparência</a></li>
												<li><a href="../post/pnfe.php">Atualizar Nota fiscal eletrônica</a></li>
												<li><a href="../post/pserTributario.php">Atualizar Portal se serviço tributário</a></li>
												<li><a href="../post/pservidor.php">Atualizar Portal do servidor</a></li>	
											</ul>
										</li>
										<li><a href="../post/attransparencia">Atualizar Transparência</a></li>
										<li>
											<span class="opener">LRF e contas públicas</span>
											<ul>
												<li><a href="../post/prgf.php">Atualizar RGF - Relatório de gestão fiscal</a></li>
												<li><a href="../post/prreo.php">Atualizar RREO - Relatório resumido da execução orçamentária</a></li>
												<li><a href="../post/ploa.php">Atualizar LOA - Lei orçamentária anual</a></li>
												<li><a href="../post/pldo.php">Atualizar LDO - Lei de diretrizes orçamentária</a></li>
												<li><a href="../post/ppcpe.php">Atualizar PCPE - Procedimentos contábeis patrimoniais específicos</a></li>
												<li><a href="../post/pcmed.php">Atualizar CMED - Cronograma da execução mensal de desembolso</a></li>
												<li><a href="../post/ppfa.php">Atualizar PFA - Programação financeira anual</a></li>
												<li><a href="../post/pppa.php">Atualizar PPA - Plano plurianual</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Publicações</span>
											<ul>
												<li><a href="../post/pdecretos.php">Atualizar Decretos</a></li>
												<li><a href="../post/pdiarias.php">Atualizar Diárias</a></li>
												<li><a href="../post/pprocessoSel.php">Atualizar Processo seletivo</a></li>
												<li><a href="../post/pportarias.php">Atualizar Portarias</a></li>
												<li><a href="../post/pleis.php">Atualizar Leis municipais</a></li>
												<li><a href="../post/poutras.php">Atualizar Outras publicações</a></li>
											</ul>
										</li>
										<li><a href="../post/pdiario.php">Atualizar Diário oficial</a></li>
									</ul>
								</nav>

								<footer id="footer">
									<p class="copyright">&copy; Todos os direitos reservados Design: <a href="https://www.instagram.com/luansantos_kr/?hl=pt-br">Luan Santos</a>.</p>
								</footer>
						</div>
					</div>
			</div>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
	</body>
</html>


<?php 
} else{
	header("location:../index.php");
}
 ?>