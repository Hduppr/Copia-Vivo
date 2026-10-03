<?php
    class ProdutosView{

    public function MostrarMiniaturaCelulares($Produtos){
        echo "<a href='#'>
                <div class='CardProduto'>
                    <div class='ImagemProduto'>
                        <img src='./images/{$Produtos->Imagem}' alt=''>
                    </div>
                    <div>
                        <div>
                            <span class='Frete'>FRETE GRÁTIS</span>
                            <h1>{$Produtos->Nome}</h1>
                        </div>
                        
                        <div>
                            <p class='precoProduto'>R$ {$Produtos->PrecoAvista} à vista</p>
                            <p class='parcelas'>{$Produtos->Parcelas}x de R$ {$Produtos->PrecoJuros} sem juros</p>
                        </div>
                        <button class='btnCompraragora'>Comprar agora</button>
                    </div>
                    
                </div>
            </a>";
    }
	
    public function MostrarMiniaturasCelulares($inicio, $qtdMostrar){
        $Produtos = ProdutosController::ListarCelulares($qtdMostrar * 2);
		for ($i = $inicio; $i < $inicio + $qtdMostrar; $i++) {
            $this->MostrarMiniaturaCelulares($Produtos[$i]);
		}
	}
    public function MostrarMiniaturaEletronicos($Produtos){
        echo "<a href='#'>
                <div class='CardProduto'>
                    <div class='ImagemProduto'>
                        <img src='./images/{$Produtos->Imagem}' alt=''>
                    </div>
                    <div>
                        <div>
                            <span class='Frete'>FRETE GRÁTIS</span>
                            <h1>{$Produtos->Nome}</h1>
                        </div>
                        
                        <div>
                            <p class='precoProduto'>R$ {$Produtos->PrecoAvista} à vista</p>
                            <p class='parcelas'>{$Produtos->Parcelas}x de R$ {$Produtos->PrecoJuros} sem juros</p>
                        </div>
                        <button class='btnCompraragora'>Comprar agora</button>
                    </div>
                    
                </div>
            </a>";
    }
	
    public function MostrarMiniaturasEletronicos($qtdMostrar){
        $Produtos = ProdutosController::ListarEletronicos($qtdMostrar);
		for ($i=0; $i < $qtdMostrar/2; $i++) { 
            $this->MostrarMiniaturaEletronicos($Produtos[$i]);
		}
	}



    }
?>