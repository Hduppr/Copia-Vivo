<?php
    class ProdutosController{
        
        public static function ListarCelulares($QtdMostrar){
            $ArrayAssoc = Produtos::ListarCelulares($QtdMostrar);
            $ArrayInstancias = [];

            for ($i=0; $i < count($ArrayAssoc); $i++) { 
                $produto = new Produtos(
                    $ArrayAssoc[$i]['id'],
                    $ArrayAssoc[$i]['nome'],
                    $ArrayAssoc[$i]['imagem'],
                    $ArrayAssoc[$i]['categoria'],
                    $ArrayAssoc[$i]['tipo'],
                    $ArrayAssoc[$i]['descricao'],
                    $ArrayAssoc[$i]['precoAvista'],
                    $ArrayAssoc[$i]['precoJuros'],
                    $ArrayAssoc[$i]['parcelas']
                );

                array_push($ArrayInstancias,$produto);
            }
            return $ArrayInstancias;
        }
        public static function ListarEletronicos($QtdMostrar){
            $ArrayAssoc = Produtos::ListarEletronicos($QtdMostrar);
            $ArrayInstancias = [];

            for ($i=0; $i < count($ArrayAssoc); $i++) { 
                $produto = new Produtos(
                    $ArrayAssoc[$i]['id'],
                    $ArrayAssoc[$i]['nome'],
                    $ArrayAssoc[$i]['imagem'],
                    $ArrayAssoc[$i]['categoria'],
                    $ArrayAssoc[$i]['tipo'],
                    $ArrayAssoc[$i]['descricao'],
                    $ArrayAssoc[$i]['precoAvista'],
                    $ArrayAssoc[$i]['precoJuros'],
                    $ArrayAssoc[$i]['parcelas']
                );

                array_push($ArrayInstancias,$produto);
            }
            return $ArrayInstancias;
        }


    }
?>