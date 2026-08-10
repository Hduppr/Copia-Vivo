<?php
    require_once './dados/Dados.php';

	function apps($Array,$Num){
		for ($i=0; $i < 4; $i++) { 
			# code...
			echo '<div class="caixaApps">
					<section class="imgApps">
						<img src="./images/'.$Array[$Num]['imagem'].'" alt="">
					</section>
					<section class="infoApps">
						
						<div>
							<h1 class="megas">'.$Array[$Num]['nome'].'</h1>   
							<h2>'.$Array[$Num]['descricao'].'</h2>
						</div>
						
						<p class="preco">'.$Array[$Num]['preço'].'</p>
						
						<div>
							<p>Valor do plano inicial.</p>
							<button class="btnAssinar">Assinar '.$Array[$Num]['nome'].'</button>
						</div>
					</section>
				</div>';
		}
	}

	function Produtos($Array,$qtdC,$QtdF){
		for ($i=$qtdC; $i < $QtdF; $i++) { 
			# code...
			echo '<a href="#">
					<div class="CardProduto">
						<div class="ImagemProduto">
							<img src="./images/'.$Array[$i]['imagem'].'" alt="">
						</div>
						<div>
							<div>
								<span class="Frete">FRETE GRÁTIS</span>
								<h1>'.$Array[$i]['descricao'].'</h1>
							</div>
							
							<div>
								<p class="precoProduto">R$ '.$Array[$i]['precoAvista'].' à vista</p>
								<p class="parcelas">12x de R$ '.$Array[$i]['precoJuros'].' sem juros</p>
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

    function Caixinhas($QtdC,$QtdF,$Array){
        for ($i=$QtdC; $i < $QtdF; $i++) { 

            echo '<a class="CaixaAuto">
                    <img src="./images/'.$Array[$i]['imagem'].'" alt="">
                    <h1>'.$Array[$i]['titulo'].'</h1></a>';
        }
    }

?>