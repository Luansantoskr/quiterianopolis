
<?php 
include "../classes/conexao.php";
$mysqli = new mysqli("sql213.epizy.com", "epiz_27666946", "Op6E1P4Jn8oJR6S", "epiz_27666946_prefeitura");


$info_control = "SELECT * from info_controladoria";
$contratos_control = "SELECT * from contratos_controladoria";
$portaria_control = "SELECT * from portarias_controladoria";
$ordenador_control = "SELECT * from ordenadores_controladoria";
$licitacoes_control = "SELECT * from licitacoes_controladoria";
$in_control = "SELECT * from in_controladoria";

$inf = $mysqli->query($info_control) or die ($mysqli->error);
$inf2 = $mysqli->query($info_control) or die ($mysqli->error);
$cont = $mysqli->query($contratos_control) or die ($mysqli->error);
$port = $mysqli->query($portaria_control) or die ($mysqli->error);
$orde = $mysqli->query($ordenador_control) or die ($mysqli->error);
$licit = $mysqli->query($licitacoes_control) or die ($mysqli->error);
?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Prefeitura de Quiterianópolis</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="is-preload">
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
											<h2>Informações da secretaria e secretário</h2>
										</header>
											<table>
												<tr>
													<td> <strong>CNPJ:</strong> </td>
													<td> <strong>Telefone:</strong> </td>
													<td> <strong>Email: </strong></td>
													<td> <strong>horário: </strong></td>
													<td> <strong>endereço: </strong></td> <br>
																							
												</tr>

												<?php 
													while($dado = $inf->fetch_array()){ ?>
													<tr>
														<td><?php echo $dado["cnpj_controladoria"];?></td>
														<td><?php echo $dado["telefone_controladoria"];?></td>
														<td><?php echo $dado["email_controladoria"];?></td>
														<td><?php echo $dado["horario_controladoria"];?></td>
														<td><?php echo $dado["endereco_controladoria"];?></td>
														
													</tr>
													<?php	} ?>
												<tr>
													<td> <strong>Nome:</strong> </td>
													<td> <strong>Cargo:</strong> </td>
													<td> <strong>Período: </strong></td>
													<td> <strong>Amparo legal: </strong></td>
													<td> <strong>matricula: </strong></td>	
												</tr>

												<?php 
													while($dado = $inf2->fetch_array()){ ?>
													<tr>
														<td><?php echo $dado["nome_controladoria"];?></td>
														<td><?php echo $dado["cargo_controladoria"];?></td>
														<td><?php echo $dado["periodo_controladoria"];?></td>
														<td><?php echo $dado["amparo_controladoria"];?></td>
														<td><?php echo $dado["matricula"];?></td>
													</tr>
													
												<?php	} ?>
											</table>
									</div>
									
                                </section>
								<section id="banner">
									<div class="content">
                                   
										<header>
											<h2>Biografia do secretário(a)</h2>
										</header>
										
									</div>
									
                                </section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Mais informações da secretaria</h2>
									</header>
									<div class="features">
											<h3>Contratos: </h3>
										<table>
										<tr>
													<td> <strong>Titulo contrato:</strong> </td>
													<td> <strong>Conteudo contrato:</strong> </td>
													<td> <strong>Data contrato: </strong></td>
													<td> <strong>Credor: </strong></td>
																							
												</tr>

												<?php 
													while($dado = $cont->fetch_array()){ ?>
													<tr>
														<td><?php echo $dado["titulo_contrato_controladoria"];?></td>
														<td><?php echo $dado["conteudo_contrato_controladoria"];?></td>
														<td><?php echo date("d/m/Y", strtotime($dado["data_contrato_controladoria"]));?></td>
														<td><?php echo $dado["credor_contrato_controladoria"];?></td>														
													</tr>
													<?php	} ?>
										</table>

										<h3>Portarias: </h3>
										<table>
										<tr>
													<td> <strong>Titulo portaria:</strong> </td>
													<td> <strong>Conteudo portaria:</strong> </td>
													<td> <strong>Data portaria: </strong></td>
																							
												</tr>

												<?php 
													while($dado = $port->fetch_array()){ ?>
													<tr>
														<td><?php echo $dado["titulo_portaria_controladoria"];?></td>
														<td><?php echo $dado["conteudo_portaria_controladoria"];?></td>
														<td><?php echo date("d/m/Y", strtotime($dado["data_portaria_controladoria"]));?></td>													
													</tr>
													<?php	} ?>
										</table>
										<h3>Ordenadores: </h3>
										<table>
										<tr>
													<td> <strong>Nome ordenador:</strong> </td>
													<td> <strong>Data início:</strong> </td>
													<td> <strong>Data fim: </strong></td>
																							
												</tr>

												<?php 
													while($dado = $orde->fetch_array()){ ?>
													<tr>
														<td><?php echo $dado["nome_ordenador_controladoria"];?></td>
														<td><?php echo date("d/m/Y", strtotime($dado["dataInicio_ordenador_controladoria"]));?></td>	
														<td><?php echo date("d/m/Y", strtotime($dado["dataFim_ordenador_controladoria"]));?></td>													
													</tr>
													<?php	} ?>
										</table>
										<h3>Licitações: </h3>
										<table>
										<tr>
													<td> <strong>Titulo Licitação:</strong> </td>
													<td> <strong>Conteudo licitação:</strong> </td>
													<td> <strong>Data licitacão: </strong></td>
																							
												</tr>

												<?php 
													while($dado = $licit->fetch_array()){ ?>
													<tr>
														<td><?php echo $dado["titulo_licitacao_controladoria"];?></td>
														<td><?php echo $dado["conteudo_licitacao_controladoria"];?></td>	
														<td><?php echo date("d/m/Y", strtotime($dado["data_licitacao_controladoria"]));?></td>													
													</tr>
													<?php	} ?>
										</table>
									</div>
								</section>

							<!-- Section -->
							<section>
									<header class="major">
										<h2>Notícias mais recentes</h2>
									</header>
									<div class="features">
										
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
												<li><a href="prefeito.php">Prefeito e vice</a></li>
												<li><a href="gestores.php">Gestores </a></li>
											</ul>
										</li>
										<li>
											<span class="opener">O município</span>
											<ul>
												<li><a href="diarioOficial.php">Diário oficial</a></li>
												<li><a href="dadosMun.php">Dados do município</a></li>
												<li><a href="guiaMun.php">Guia do município</a></li>
												<li><a href="simbolos.php">Símbolos municipais</a></li>
												<li><a href="veiculos.php">Veículos</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Secretarias</span>
											<ul>
												<li><a href="controladoria.php">Controladoria geral do município</a></li>
												<li><a href="fundo.php">Fundo municipal de saúde</a></li>
												<li><a href="gabinetePref.php">Gabinete do prefeito</a></li>
												<li><a href="planGestao.php">Planejamento e gestão de finanças</a></li>
												<li><a href="procuradoria.php">Procuradoria geral do município</a></li>
												<li><a href="assisSocial.php">Secretaria de assistência social</a></li>
												<li><a href="cultura.php">Secretaria de cultura</a></li>
												<li><a href="empreendedorismo.php">Secretaria de desenvolvimento economico e empreendedorismo</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Serviços</span>
											<ul>
												<li><a href="transparencia.php">Transparência</a></li>
												<li><a href="nfe.php">Nota fiscal eletrônica</a></li>
												<li><a href="serTributario.php">Portal de serviço tributário</a></li>
												<li><a href="servidor.php">Portal do servidor</a></li>	
											</ul>
										</li>
										<li><a href="transparencia.php">Transparência</a></li>
										<li>
											<span class="opener">LRF e contas públicas</span>
											<ul>
												<li><a href="rgf.php">RGF - Relatório de gestão fiscal</a></li>
												<li><a href="rreo.php">RREO - Relatório resumido da execução orçamentária</a></li>
												<li><a href="loa.php">LOA - Lei orçamentária anual</a></li>
												<li><a href="ldo.php">LDO - Lei de diretrizes orçamentária</a></li>
												<li><a href="pcpe.php">PCPE - Procedimentos contábeis patrimoniais específicos</a></li>
												<li><a href="cmed.php">CMED - Cronograma da execução mensal de desembolso</a></li>
												<li><a href="pfa.php">PFA - Programação financeira anual</a></li>
												<li><a href="ppa.php">PPA - Plano plurianual</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Publicações</span>
											<ul>
												<li><a href="decretos.php">Decretos</a></li>
												<li><a href="diarias.php">Diárias</a></li>
												<li><a href="processoSel.php">Processo seletivo</a></li>
												<li><a href="portarias.php">Portarias</a></li>
												<li><a href="leis.php">Leis municipais</a></li>
												<li><a href="outras.php">Outras publicações</a></li>
											</ul>
										</li>
										<li><a href="dOficial.php">Diário oficial</a></li>
									</ul>
								</nav>


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