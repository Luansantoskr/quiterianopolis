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
									<form action="postar.php" enctype="multipart/form-data">
										<label>Descrição</label>
											<input type="text" name="nome" name="nome">
										<label>Legenda</label>
											<input type="text" id="descricao" name="descricao"><br>
										<div id='container'></div>
											<input type="file" value="adicionar arquivo" accept=".pdf"><br><br>
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
												<li><a href="../post/atprefeito.php">Atualizar Prefeito e vice</a></li>
												<li><a href="../post/atgestores.php"> Atualizar Gestores </a></li>
											</ul>
										</li>
										<li>
											<span class="opener">O município</span>
											<ul>
												<li><a href="../post/atdiarioOficial.php">Atualizar Diário oficial</a></li>
												<li><a href="../post/atdadosMun.php">Atualizar dados do município</a></li>
												<li><a href="../post/atguiaMun.php">Atualizar guia do município</a></li>
												<li><a href="../post/atsimbolos.php">Atualizar símbolos municipais</a></li>
												<li><a href="../post/atveiculos.php">Atualizar veículos</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Secretarias</span>
											<ul>
												<li><a href="../post/atcontroladoria.php">Atualizar Controladoria geral do município</a></li>
												<li><a href="../post/atfundo.php">Atualizar Fundo municipal de saúde</a></li>
												<li><a href="../post/atgabinetePref.php">Atualizar Gabinete do prefeito</a></li>
												<li><a href="../post/atplanGestao.php">Atualizar Planejamento e gestão de finanças</a></li>
												<li><a href="../post/atprocuradoria.php">Atualizar Procuradoria geral do município</a></li>
												<li><a href="../post/atassisSocial.php">Atualizar Secretaria de assistência social</a></li>
												<li><a href="../post/atcultura.php">Atualizar Secretaria de cultura</a></li>
												<li><a href="../post/atempreendedorismo.php">Atualizar Secretaria de desenvolvimento economico e empreendedorismo</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Serviços</span>
											<ul>
												<li><a href="../post/attransparencia.php">Atualizar Transparência</a></li>
												<li><a href="../post/atnfe.php">Atualizar Nota fiscal eletrônica</a></li>
												<li><a href="../post/atserTributario.php">Atualizar Portal se serviço tributário</a></li>
												<li><a href="../post/atservidor.php">Atualizar Portal do servidor</a></li>	
											</ul>
										</li>
										<li><a href="../post/attransparencia">Atualizar Transparência</a></li>
										<li>
											<span class="opener">LRF e contas públicas</span>
											<ul>
												<li><a href="../post/atrgf.php">Atualizar RGF - Relatório de gestão fiscal</a></li>
												<li><a href="../post/atrreo.php">Atualizar RREO - Relatório resumido da execução orçamentária</a></li>
												<li><a href="../post/atloa.php">Atualizar LOA - Lei orçamentária anual</a></li>
												<li><a href="../post/atldo.php">Atualizar LDO - Lei de diretrizes orçamentária</a></li>
												<li><a href="../post/atpcpe.php">Atualizar PCPE - Procedimentos contábeis patrimoniais específicos</a></li>
												<li><a href="../post/atcmed.php">Atualizar CMED - Cronograma da execução mensal de desembolso</a></li>
												<li><a href="../post/atpfa.php">Atualizar PFA - Programação financeira anual</a></li>
												<li><a href="../post/atppa.php">Atualizar PPA - Plano plurianual</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Publicações</span>
											<ul>
												<li><a href="../post/atdecretos.php">Atualizar Decretos</a></li>
												<li><a href="../post/atdiarias.php">Atualizar Diárias</a></li>
												<li><a href="../post/atprocessoSel.php">Atualizar Processo seletivo</a></li>
												<li><a href="../post/atportarias.php">Atualizar Portarias</a></li>
												<li><a href="../post/atleis.php">Atualizar Leis municipais</a></li>
												<li><a href="../post/atoutras.php">Atualizar Outras publicações</a></li>
											</ul>
										</li>
										<li><a href="../post/atdOficial.php">Atualizar Diário oficial</a></li>
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