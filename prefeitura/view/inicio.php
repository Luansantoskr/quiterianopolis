

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
								<section id="banner">
									<div class="content">
                                   
										<header>
											<h1>Prefeitura de Quiterianópolis</h1>
										</header>
										
									</div>
									<span class="image object">
										<img src="../images/banner.jpg" alt="" />
									</span>
                                </section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Boletim Corona Vírus</h2>
									</header>
									<div class="features">
										
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Veja mais</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<h3>LRF</h3>
											<ul class="actions">
												<li><a href="#" class="button button2">Mais LRF</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<h3>Decretos</h3>
											<ul class="actions">
												<li><a href="#" class="button">Mais decretos</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<h3>Leis</h3>
											<ul class="actions">
												<li><a href="#" class="button">Mais leis</a></li>
											</ul>
										</article>
										
									</div>
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
												<li><a href="view/prefeito.php">Prefeito e vice</a></li>
												<li><a href="view/gestores.php">Gestores </a></li>
											</ul>
										</li>
										<li>
											<span class="opener">O município</span>
											<ul>
												<li><a href="view/diarioOficial.php">Diário oficial</a></li>
												<li><a href="view/dadosMun.php">Dados do município</a></li>
												<li><a href="view/guiaMun.php">Guia do município</a></li>
												<li><a href="view/simbolos.php">Símbolos municipais</a></li>
												<li><a href="view/veiculos.php">Veículos</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Secretarias</span>
											<ul>
												<li><a href="view/controladoria.php">Controladoria geral do município</a></li>
												<li><a href="view/fundo.php">Fundo municipal de saúde</a></li>
												<li><a href="view/gabinetePref.php">Gabinete do prefeito</a></li>
												<li><a href="view/planGestao.php">Planejamento e gestão de finanças</a></li>
												<li><a href="view/procuradoria.php">Procuradoria geral do município</a></li>
												<li><a href="view/assisSocial.php">Secretaria de assistência social</a></li>
												<li><a href="view/cultura.php">Secretaria de cultura</a></li>
												<li><a href="view/empreendedorismo.php">Secretaria de desenvolvimento economico e empreendedorismo</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Serviços</span>
											<ul>
												<li><a href="view/transparencia.php">Transparência</a></li>
												<li><a href="view/nfe.php">Nota fiscal eletrônica</a></li>
												<li><a href="view/serTributario.php">Portal se serviço tributário</a></li>
												<li><a href="view/servidor.php">Portal do servidor</a></li>	
											</ul>
										</li>
										<li><a href="view/transparencia.php">Transparência</a></li>
										<li>
											<span class="opener">LRF e contas públicas</span>
											<ul>
												<li><a href="view/rgf.php">RGF - Relatório de gestão fiscal</a></li>
												<li><a href="view/rreo.php">RREO - Relatório resumido da execução orçamentária</a></li>
												<li><a href="view/loa.php">LOA - Lei orçamentária anual</a></li>
												<li><a href="view/ldo.php">LDO - Lei de diretrizes orçamentária</a></li>
												<li><a href="view/pcpe.php">PCPE - Procedimentos contábeis patrimoniais específicos</a></li>
												<li><a href="view/cmed.php">CMED - Cronograma da execução mensal de desembolso</a></li>
												<li><a href="view/pfa.php">PFA - Programação financeira anual</a></li>
												<li><a href="view/ppa.php">PPA - Plano plurianual</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Publicações</span>
											<ul>
												<li><a href="view/decretos.php">Decretos</a></li>
												<li><a href="view/diarias.php">Diárias</a></li>
												<li><a href="view/processoSel.php">Processo seletivo</a></li>
												<li><a href="view/portarias.php">Portarias</a></li>
												<li><a href="view/leis.php">Leis municipais</a></li>
												<li><a href="view/outras.php">Outras publicações</a></li>
											</ul>
										</li>
										<li><a href="view/dOficial.php">Diário oficial</a></li>
									</ul>
								</nav>

										<ul class="actions">
												<li><a href="#" class="button">Ouvidoria</a></li>
												<li><a href="#" class="button">e-Sic</a></li>
										</ul>

								<footer id="footer">
									<p class="copyright">&copy; Todos os direitos reservados Design: <a href="">Luan Santos</a>.</p>
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

<script type="text/javascript">
		$(document).ready(function(){

				
				$('#vendasFeitas').load('vendas/vendasRelatorios.php');
				
				$('#vendasFeitas').show();
				
		});

		

	</script>


