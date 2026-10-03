<?php
    class Produtos{
        public $Codigo;
        public $Nome;
        public $Imagem;
        public $Categoria;
        public $Tipo;
        public $Descricao;
        public $PrecoAvista;
        public $PrecoJuros;
        public $Parcelas;

        public function __construct($codigo,$nome,$imagem,$categoria,$tipo, $descricao,$precoAvista,$precoJuros, $parcelas) {
            $this->Codigo = $codigo;
            $this->Nome = $nome;
            $this->Imagem = $imagem;
            $this->Categoria = $categoria;
            $this->Tipo = $tipo;
            $this->Descricao = $descricao;
            $this->PrecoAvista = $precoAvista;
            $this->PrecoJuros = $precoJuros;
            $this->Parcelas = $parcelas;

        } 

        public static function ListarCelulares($QtdMostrar){
            require('dados/Dados.php');
            $ArrayCelulares = [];
            for ($i=0; $i < count($produtos); $i++) { 
               if($produtos[$i]['categoria'] == 'Celulares' && count($ArrayCelulares) < $QtdMostrar){
                    $ArrayCelulares[] = $produtos[$i];
                    $achei = true;
               }

            }
               if(!$achei){
                    throw new Exception('Erro: Não Encontrado'); 
               }
            return $ArrayCelulares;
        }
        public static function ListarEletronicos($QtdMostrar){
            require('dados/Dados.php');
            $ArrayEletronicos = [];
            $achei = false;
            for ($i=0; $i < count($produtos); $i++) { 
               if($produtos[$i]['categoria'] == 'Eletrônicos' && count($ArrayEletronicos) < $QtdMostrar){
                    $ArrayEletronicos[] = $produtos[$i];
                    $achei = true;
               }

            }
            if(!$achei){
                throw new Exception('Erro: Não Encontrado'); 
            }
            return $ArrayEletronicos;
        }



    }
?>