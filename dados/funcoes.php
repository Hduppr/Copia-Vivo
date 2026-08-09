<?php
	function apps($imagem){
		for ($i=0; $i < 4; $i++) { 
			# code...
			echo '<div class="caixaApps">
					<section class="imgApps">
						<img src="./images/'.$imagem.'" alt="">
					</section>
					<section class="infoApps">
						
						<div>
							<h1 class="megas">Vivo TV</h1>   
							<h2>TV 100% online, sem fidelidade, taxas ou instalação! Assista seus canais onde e como quiser.</h2>
						</div>
						
						<p class="preco"> R$ 100 /mês</p>
						
						<div>
							<p>Valor do plano inicial.</p>
							<button class="btnAssinar">Assinar Vivo TV</button>
						</div>
					</section>
				</div>';
		}
	}

	function Produtos($imagem){
		for ($i=0; $i < 4; $i++) { 
			# code...
			echo '<a href="#">
					<div class="CardProduto">
						<div class="ImagemProduto">
							<img src="./images/'.$imagem.'" alt="">
						</div>
						<div>
							<div>
								<span class="Frete">FRETE GRÁTIS</span>
								<h1>Smartphone Samsung Galaxy S25 FE 5G 256GB Preto 8GB RAM Tela 6,7" Câm. Traseira 50+12+8MP Frontal 12MP</h1>
							</div>
							
							<div>
								<p class="precoProduto">R$ 3.419,05 à vista</p>
								<p class="parcelas">12x de R$ 299,92 sem juros</p>
							</div>
							<button class="btnCompraragora">Comprar agora</button>
						</div>
						
					</div>
				</a>';
			}
	}

	function Hover(){

		echo '<div class="container">
            <div class="CaixaHover largurapadrao">
                
                <ul class="">
                    <li> <h1>CASA</h1></li>
                    <li>Fibra + Pós</li>
                    <li>Vivo Fibra</li>
                    <li>Casa 5G</li>
                    <li>Vivo TV</li>
                    <li>Escolha seus Produtos</li>
                    <li>Casa Inteligente</li>
                </ul>
                
                
                <ul>  
                    <li> <h1>PLANOS DE CELULAR</h1></li>
                    <li>Pós-Pago</li>
                    <li>Controle</li>
                    <li>Easy Lite</li>
                    <li> Pré-Pago</li>
                    <li> Recarga</li>
                    <li> Roaming Internacional</li>
                    <li>Tourist Plan</li>
                </ul>
                
                
                <ul>
                    <li> <h1>SERVIÇOS DIGITAIS</h1></li>
                    <li>Apps avulsos</li>
                    <li>App Store</p>
                        <li>Empréstimos</li>
                        <li>Seguros e Assistências</li>
                        <li>Consórcio</li>
                    </ul>
                    
                    
                    <ul>
                        <li><h1>PRODUTOS</h1></li>
                        <li>Celulares</li>
                        <li>Acessórios</li>
                        <li>Informática e Games</li>
                        <li>Smartwatch e Bem-Estar</li>
                        <li>TV, Áudio e Vídeo</li>
                        <li>Casa Inteligente</li>
                        <li>Celular + Plano Easy 21</li>
                    </ul>
                    
                    
                    <ul>
                        <li> <h1>UNIVERSOS</h1></li>
                        <li>Mundo Apple</li>
                        <li>Mundo Samsung</li>
                        <li>Mundo Motorola</li>
                        <li>Vivo Gaming</li>
                        <li>Vivo Universitários</li>
                    </ul>
                    
                    
            </div>
        </div>';
    }

    function Caixinhas($Qtd,$imagem,$texto){
        for ($i=0; $i < $Qtd; $i++) { 

            echo '<a class="CaixaAuto">
                    <img src="./images/'.$imagem.'" alt="">
                    <h1>'.$texto.'"</h1></a>';
        }
    }

?>