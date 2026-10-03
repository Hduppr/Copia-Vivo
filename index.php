<?php
	require_once './dados/funcoes.php';
	require_once './dados/Dados.php';
	require_once 'autoload.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Vivo site oficial: 5G, ultra banda larga, HDTV e mais</title>
		<link rel="icon" href="./images/logo.png" type="image/png">
		<link rel="stylesheet" href="./css/estilo.css">
		<link rel="stylesheet" href="./css/mobile.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
	</head>
	<body>
		<header>
			<section id="conteudoheaderA" class="largurapadrao">
				<nav>
					<a href="index.html"><img id="logo" src="./images/vivo-logo-0.png" alt="logo da vivo"></a>
					<a class="bold" href="index.html"> Para Você</a>
					<a class="cinza" href="">Para Empresas</a>
				</nav>
				
				<nav>
					
					<a href=""><img src="./images/accessibility_30dp_660099_FILL0_wght400_GRAD0_opsz24.png" alt=""> Acessebilidade</a>
					<a href=""><img src="./images/search_30dp_660099_FILL0_wght400_GRAD0_opsz24.png" alt="">Buscar</a>
					<a href=""><img src="./images/person_30dp_660099_FILL0_wght400_GRAD0_opsz24.png" alt="">Login</a>
					<a href="" class="cinza">Oferta para Santos</a>
				</nav>
			</section>
			
			
			<section id="conteudoheaderB" class="largurapadrao">
				<nav>
					<a href="">Baixe o app Vivo</a>
					<a id="ProdutoHover" href="">Produtos e Serviços</a>
					<a id="AjudaHover" href="">Ajuda</a>
					<a id="PqvivoHover" href="">Porque Vivo</a>
					<a href="" id="roxo">Melhores Ofertas</a>
				</nav>
				
			</section>
		
		</header>
		
		<div id="CaixaHoverProdutos" >
			<?php Hover() ?>
		</div>
			
		<div id="CaixaHoverAjuda" >
			<?php Hover() ?>
		</div>
		
		<div id="CaixaHoverPqvivo" >
			<?php Hover() ?>
		</div>
					
		<section id="banner">
					
		</section>

		<main>
			<article id="areaofertas" class="largurapadrao">
				<h1>As melhores ofertas para o seu dia dia</h1>
				<section id="CarroselOfertas">
					<div id="FaixaOfertas">
						<section class="ofertas">
							
							<div class="caixaoferta">
								<section class="areainformacoes">
									<div class="diferencial">Oferta Exclusiva no site ⚡</div>
									<h1 class="produto">Vivo Fibra</h1>
									<div> <img class="imagemmega" src="./images/wifi_60dp_000000_FILL0_wght400_GRAD0_opsz48.png" alt=""> <p class="megas">600 Mega</p> </div>  
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
								</section>
								<section class="areapreco">
									<p class="preco"> R$ 100 /mês</p>
									<button class="comprar">Consultar Fibra</button>
									<button class="detalhes">Mais detalhes</button>
								</section>
							</div>
							
							<div class="caixaoferta">
								<section class="areainformacoes">
									<div class="diferencial">Plano Mais Escolhido</div>
									<h1 class="produto">Vivo Fibra</h1>
									<div> <img class="imagemmega" src="./images/wifi_60dp_000000_FILL0_wght400_GRAD0_opsz48.png" alt=""> <p class="megas">600 Mega</p> </div>  
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
								</section>
								<section class="areapreco">
									<p class="preco"> R$ 100 /mês</p>
									<button class="comprar">Consultar Fibra</button>
									<button class="detalhes">Mais detalhes</button>
								</section>
							</div>
							
							<div class="caixaoferta">
								<section class="areainformacoes">
									<h1 class="produto">Vivo Fibra</h1>
									<div> <img class="imagemmega" src="./images/wifi_60dp_000000_FILL0_wght400_GRAD0_opsz48.png" alt=""> <p class="megas">600 Mega</p> </div>  
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
								</section>
								<section class="areapreco">
									<p class="preco"> R$ 100 /mês</p>
									<button class="comprar">Consultar Fibra</button>
									<button class="detalhes">Mais detalhes</button>
								</section>
							</div>
							
							<div class="caixaoferta">
								<section class="areainformacoes">
									<div class="diferencial">Melhor Oferta</div>
									<h1 class="produto">Vivo Fibra</h1>
									<div> <img class="imagemmega" src="./images/wifi_60dp_000000_FILL0_wght400_GRAD0_opsz48.png" alt=""> <p class="megas">600 Mega</p> </div>  
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
								</section>
								<section class="areapreco">
									<p class="preco"> R$ 100 /mês</p>
									<button class="comprar">Consultar Fibra</button>
									<button class="detalhes">Mais detalhes</button>
								</section>
							</div>
							
						</section>
						
						<section class="ofertas">
							
							<div class="caixaoferta">
								<section class="areainformacoes">
									<div class="diferencial">Oferta Exclusiva no site ⚡</div>
									<h1 class="produto">Vivo Fibra</h1>
									<div> <img class="imagemmega" src="./images/wifi_60dp_000000_FILL0_wght400_GRAD0_opsz48.png" alt=""> <p class="megas">600 Mega</p> </div>  
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
								</section>
								<section class="areapreco">
									<p class="preco"> R$ 100 /mês</p>
									<button class="comprar">Consultar Fibra</button>
									<button class="detalhes">Mais detalhes</button>
								</section>
							</div>
							
							<div class="caixaoferta">
								<section class="areainformacoes">
									<div class="diferencial">Plano Mais Escolhido</div>
									<h1 class="produto">Vivo Fibra</h1>
									<div> <img class="imagemmega" src="./images/wifi_60dp_000000_FILL0_wght400_GRAD0_opsz48.png" alt=""> <p class="megas">600 Mega</p> </div>  
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
								</section>
								<section class="areapreco">
									<p class="preco"> R$ 100 /mês</p>
									<button class="comprar">Consultar Fibra</button>
									<button class="detalhes">Mais detalhes</button>
								</section>
							</div>
							
							<div class="caixaoferta">
								<section class="areainformacoes">p
									<h1 class="produto">Vivo Fibra</h1>
									<div> <img class="imagemmega" src="./images/wifi_60dp_000000_FILL0_wght400_GRAD0_opsz48.png" alt=""> <p class="megas">600 Mega</p> </div>  
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
								</section>
								<section class="areapreco">
									<p class="preco"> R$ 100 /mês</p>
									<button class="comprar">Consultar Fibra</button>
									<button class="detalhes">Mais detalhes</button>
								</section>
							</div>
							
							<div class="caixaoferta">
								<section class="areainformacoes">
									<div class="diferencial">Melhor Oferta</div>
									<h1 class="produto">Vivo Fibra</h1>
									<div> <img class="imagemmega" src="./images/wifi_60dp_000000_FILL0_wght400_GRAD0_opsz48.png" alt=""> <p class="megas">600 Mega</p> </div>  
									<div><img src="./images/check_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""><p class="observacao">1 ano grátis de piroca de borracha</p></div>
								</section>
								<section class="areapreco">
									<p class="preco"> R$ 100 /mês</p>
									<button class="comprar">Consultar Fibra</button>
									<button class="detalhes">Mais detalhes</button>
								</section>
							</div>
							
						</section>
					</div>
				</section>
				<div class="caixaBotoes">
					<button id="btnEsquerdaOfertas" class="BotoesCarrosel"><img src="./images/arrow.png" alt=""></button>
					<button id="RadioEsquerdaOferta" class="RadiosCarrosel"></button>
					<button id="RadioDireitaOferta" class="RadiosCarrosel"></button>
					<button id="btnDireitaOfertas" class="BotoesCarrosel"><img src="./images/arrow.png" alt=""></button>
				</div>
				
			</article>
			
			
			<article id="AreaProdutos" class="largurapadrao">
				
				<h1>Ofertas tech com frete grátis para todo Brasil</h1>
				<button id="btnesquerda"><img src="./images/arrow.png" alt=""></button>  
				<section id="CarroselProdutos"> 
					<div id="Faixa">
						<section class="CaixasProdutos">
							<?php
								$View = new ProdutosView();
								$View->MostrarMiniaturasCelulares(0,4);
							?>
						</section>
						
						<section class="CaixasProdutos">
							<?php
								$View = new ProdutosView();
								$View->MostrarMiniaturasCelulares(4,4);
							?>
						</section>
					</div>
				</section>
				
				<button id="btndireita"><img src="./images/arrow.png" alt=""></button>
			</article>
			
			<article id="AreaBannerAnuncios" class="largurapadrao">
				<div id="BannerAnuncios">
					<div id="FaixaBanner">
						<section class="banner">
							<img src="./images/vivo-pre-recarga-2512-desk-1920x471.webp" alt="">
							<div class="textobanner">
								<h2>FAÇA AS CONTAS!</h2>
								
								<h1>Recarregue, ganhe até 10 GB de bônus</h1>
								
								<p>No site e app tem mais internet para navegar como quiser.</p>
								
								<a href="#">Fazer recarga <img src="./images/arrow.png" alt=""> </a>
							</div>
						</section>
						
						<section class="banner">
							<img src="./images/vivo-ce-jovi-v70-2604-desk-1920x471.webp" alt="">
							<div class="textobanner">
								<h2>FAÇA AS CONTAS!</h2>
								
								<h1>Recarregue, ganhe até 10 GB de bônus</h1>
								
								<p>No site e app tem mais internet para navegar como quiser.</p>
								
								<a href="#">Fazer recarga <img src="./images/arrow.png" alt=""> </a>
							</div>
						</section >
						
						<section class="banner"> 
							<img src="./images/vivo-empresas-movel-plano-celular-2602-desk-1920x471.webp" alt="">
							<div class="textobanner">
								
								<h2>FAÇA AS CONTAS!</h2>
								
								<h1>Recarregue, ganhe até 10 GB de bônus</h1>
								
								<p>No site e app tem mais internet para navegar como quiser.</p>
								
								
								<a href="#">Fazer recarga <img src="./images/arrow.png" alt=""> </a>
								
							</div>
						</section>
						
					</div>
					<div id="RadiosAnuncio"> 
						<button id="RadioAnuncio1" class="RadiosCarrosel"></button>
						<button id="RadioAnuncio2" class="RadiosCarrosel"></button>
						<button id="RadioAnuncio3" class="RadiosCarrosel"></button>
						
					</div>
				</div>
			</article>
			
			<article id="areaofertas" class="largurapadrao">
				<h1>Apps com condições exclusivas para cliente Vivo</h1>
				<section id="CarroselApps">
					<div id="FaixaApps">
						<section class="apps">
							<?php
								apps($apps,0);
							?>

						</section>
						
						<section class="ofertas">
							<?php
								apps($apps,1);;
							?>
						</section>
						<section class="ofertas">
							<?php
								apps($apps,2);;
							?>
						</section>
					</div>
				</section>
				
				<div class="caixaBotoes">
					<button id="btnEsquerdaApps" class="BotoesCarrosel"><img src="./images/arrow.png" alt=""></button>
					<button id="RadioApps1" class="RadiosCarrosel"></button>
					<button id="RadioApps2" class="RadiosCarrosel"></button>
					<button id="RadioApps3" class="RadiosCarrosel"></button>
					<button id="btnDireitaApps" class="BotoesCarrosel"><img src="./images/arrow.png" alt=""></button>
				</div>
				
			</article>
			
			<article id="AreaEletronicos" class="largurapadrao">
				
				<h1>Eletrônicos com frete grátis pra todo o Brasil. Só na Vivo</h1>
				<button id="btnesquerdaEletronicos"><img src="./images/arrow.png" alt=""></button>  
				<section id="CarroselEletronicos"> 
					<div id="FaixaEletronicos">
						<section class="CaixasProdutos">
							<?php
								$View = new ProdutosView();
								$View->MostrarMiniaturasEletronicos(8);
							?>
						</section>
						
						<section class="CaixasProdutos">
							
							<?php
								$View = new ProdutosView();
								$View->MostrarMiniaturasEletronicos(8);
							?>
								
						</section>
					</div>
				</section>
				
				<button id="btndireitaEletronicos"><img src="./images/arrow.png" alt=""></button>
			</article>
			
			<article id="AreaAutoatendimento" class="largurapadrao">
				<h1>Autoatendimento para clientes</h1>
				<section id="Autoatendimento">
					<section id="RecargaAutoatendimento">
						<div id="imgRecarga">
							<img src="./images/vivo-smartphone-app-vivo-purpura-negativo-esquerda-320x320.svg" alt="">
						</div>
						<h1>Recarga de celular</h1>
						
						<h2>Ganthe bônus na Recarga Digital</h2>
						<div id="inputRecarga">
							<input type="tel" name="" id="NumeroRecarga" type="tel" placeholder=" " inputmode="numeric" pattern="[0-9]*" maxlength="15" >
							
							<label >
								Seu número Vivo
							</label>   
							
						</div>
						
						<button class="btnRecarga">Fazer recarga</button>

					</section>
					
					<section id="AreaCaixasAuto">
						<section class="Faixas">
							<div class="Faixa">
								<?php
									Caixinhas(0,4,$autoatendimento);
								?>
								
							</div>
							
							<div class="Faixa">

								<?php
									Caixinhas(4,8,$autoatendimento);
								?>
								
							</div>
						</section>
						
						
					</section>
				</section>
			</article> 
			
			<article id="AreaPortabilidade" class="largurapadrao">
				<a href="">
					<section id="BoxPortabilidade" class="Box">
						<div class="BoxImgh1">
							<img src="./images/Box- vivo-smartphone-portabilidade-centro-.svg" alt="">
							
							<div class="BoxH1H2">
								<h1>Portabilidade Vivo: saiba como manter seu número</h1>
								<h2>Entenda a portabilidade e aproveta para escolher um de nossos planos com condições especias</h2>
							</div>
						</div>
						<a href="#">Trazer seu número</a>
					</section>
				</a>
				
			</article>
			
			<section id="AreaConexoes">
				<article id="" class="largurapadrao">
					<h1>Viva todas as conexões com nossos serviços</h1>
					<section id="Conexoes">
						
						<section class="Faixas">
							<div class="Faixa">
								<?php
									Caixinhas(0,5,$conexoes);
								?>
							</div>
							
							<div class="Faixa">
								<?php
									Caixinhas(5,10,$conexoes);
								?>
								
							</div>
						</section>
					</section>
				</article>  
			</section>
			
			<article id="" class="largurapadrao">
				<h1>Fique por dentro</h1>
				<section id="PorDentro">
					<div class="CaixaPorDentro">
						<img src="./images/vivo-tablet-lista-purpura-esquerda-320x320.svg" alt="">
						<h1>Saiba mais sobre a pesquisa de satisfação da ANATEL</h1>
						<a href="">Acessar pesquisa ›</a>
					</div>
					
					<div class="CaixaPorDentro">
						<img src="./images/vivo-smartphone-app-favorito-purpura-320x320.svg" alt="">
						<h1>Saiba mais sobre o Plano de Conformidade das ofertas de banda larga</h1>
						<a href="">Conhecer o plano ›</a>
					</div>
					
					<div class="CaixaPorDentro">
						<img src="./images/vivo-mao-moeda-rosa-centro-320x320.svg" alt="">
						<h1>Se você já foi cliente Vivo, agora pode consultar se tem valores a receber</h1>
						<a href="">Consultar valores ›</a>
					</div>
				</section>
				
			</article>
			
			<article id="" class="largurapadrao">
				<a href="">
					<section id="" class="Box">
						<div class="BoxImgh1">
							
							<img src="./images/vivo-homem-vivinho-purpura-centro-320x320.svg" alt="">
							
							<div class="BoxH1H2">
								<h1>Portabilidade Vivo: saiba como manter seu número</h1>
								<h2>Entenda a portabilidade e aproveta para escolher um de nossos planos com condições especias</h2>
							</div>
							
						</div>
						<a href="#">Entrar no Conselho</a>
					</section>
				</a>
			</article>
			
			<article id="" class="largurapadrao">
				<h1>Acesse também</h1>
				<section id="AcesseTambem">
					<div class="CaixaAcesseTambem">
						<div class="TitulosAcesseTambem">
							<h1>VIVO EXPLICA</h1>
							<h2>Conteúdos para você descomplicar e se conectar</h2>
						</div>
						
						<div class="ImgAcesseTambem">
							<a>Acessar artigo ></a>
							<img src="./images/vivo-site-cinza-centro-320x320.svg" alt="">
						</div>
						
					</div>
					
					<div class="CaixaAcesseTambem">
						<div class="TitulosAcesseTambem"> 
							<h1>AJUDA</h1>
							<h2>Seu canal de ajuda com a Vivo</h2>
						</div>
						
						<div class="ImgAcesseTambem">
							<a>Acessar ajuda ></a>
							<img src="./images/vivo-chat-duvida-cinza-centro-320x320.svg" alt="">
						</div>
					</div>
					
					<div class="CaixaAcesseTambem">
						<div class="TitulosAcesseTambem">
							<h1>LOJA</h1>
							<h2>Encontre a loja mais próxima de você</h2>
						</div>
						
						<div class="ImgAcesseTambem">
							<a>Encontrar loja ></a>
							<img src="./images/vivo-site-cinza-centro-320x320.svg" alt="">
						</div>
					</div>
					
					<div class="CaixaAcesseTambem">
						<div class="TitulosAcesseTambem">
							<h1>SUA PRIVACIDADE</h1>
							<h2>Saiba como tratamos e protegemos seus dados</h2>
						</div>
						
						<div class="ImgAcesseTambem">
							<a>Nossas ações ></a>
							<img src="./images/vivo-chat-duvida-cinza-centro-320x320.svg" alt="">
						</div>
					</div>
				</section>
			</article>
			
			<article id="" class="largurapadrao">
				<a href="">
					<section id="" class="Box">
						<div class="BoxImgh1">
							<img src="./images/vivo-envelope-aviso-purpura-centro-320x320.svg" alt="">
							
							<div class="BoxH1H2">
								<h1>Portabilidade Vivo: saiba como manter seu número</h1>				
							</div>
							
						</div>
						
					</section>
				</a>
				
			</article>
		</main>
				
		<article id="AreaTermos" class="largurapadrao">
		
		<p>6 meses de Amazon Prime de cortesia p    ara clientes Vivo Pós, Vivo Total e Vivo Fibra. 3 meses de Amazon Prime cortesia para clientes Vivo Controle. 
			Saiba como <a href="">verificar o regulamento e ativar seu benefício</a> de cortesia da assinatura Amazon Prime.</p>
			
		<p>Oferta sujeita a alteração, conforme Termos e Condições. Cancele a qualquer momento pelo App Vivo. A <a href="">Amazon.com</a>, Inc. e suas afiliadas não são patrocinadoras desta promoção. 
			Amazon Prime tem o custo de R$ 13,90/mês após o período promocional. Amazon, Amazon Prime e todos os logotipos relacionados são marcas comerciais da <a href="">Amazon.com</a>, 
			Inc. ou de suas afiliadas.</p>
			
		<p><a href="">Regulamento da Oferta - Amazon - 3 meses e 6 meses</a></p>
		
		<p>O benefício do Perplexity Pro é válido exclusivamente para novos usuários da plataforma, mediante resgate do cupom no app Vivo.</p>
		
		<p>A quantidade total de GB é composta pela franquia mensal + 3 GB de bônus na escolha de débito automático, que deve ser solicitado no seu banco, e o bônus de portabilidade 
			é elegível a clientes que trouxerem um número de outra operadora para a Vivo e tem validade de 12 meses.</p>
			
			<p>O bônus especial possui validade de 12 meses.</p>
			
			<p>Crédito em Vale Bônus todos os meses é válido apenas para pagamentos da fatura em cartão de crédito, Pix ou débito automático.</p>
			
			<p>Esse plano possui fidelidade.</p>
			
			<p>¹Bônus para navegar como quiser, para novos clientes, válido nas recargas realizadas nos canais digitais Vivo.</p>
			
			<p>No site ou aplicativo <a href=""><strong>Não Me Perturbe</strong></a>, você pode solicitar o bloqueio de ligações recebidas com ofertas de empresas de telecomunicações. O prazo para bloqueio é de até 30 dias após a 
				solicitação. Para não receber chamadas de telemarketing de setores não participantes do Não Me Perturbe efetue o bloqueio diretamente no seu celular pela agenda ou através de 
				aplicativo específico. Caso não o tenha instalado, procure por "bloqueio de chamadas" na loja de aplicativos do seu sistema operacional (Android ou iOS) e baixe o de sua preferência.</p>
				
		</article>
								
		<footer>
			<section id="">
				<div class="largurapadrao"></div>
			</section>
			
			<div id="FooterLogos" class="largurapadrao">
				<img src="./images/Logo_Telefonica_01.svg" alt="">
				
				<img src="./images/logo-comite-olimpico-brasao-brasil-2404-98x57.svg" alt="">
				
				<img src="./images/logo-5g-176x44.png" alt="">
			</div>
			
			
		</footer>
								
		<span id="whatsapp">
			<img  src="./images/whatsapp.png" alt="">
		</span>
		
		<span id="suporte">
			<img src="./images/suporte.svg" alt="">
			
		</span>
		
		<script src="./js/scriptHome.js"></script>
	</body>
</html>