<?php



$ofertas = [

    [
        'id' => 1,
        'produto' => 'Vivo Fibra',
        'diferencial' => 'Oferta Exclusiva no site ⚡',
        'velocidade' => '300 Mega',
        'preco' => 79.99,
        'precoFormatado' => 'R$ 79,99 /mês',
        'imagem' => 'wifi_60dp_000000_FILL0_wght400_GRAD0_ops48.png',
        'observacoes' => [
            'Wi-Fi incluso',
            'Instalação grátis'
        ],
        'botaoComprar' => 'Contratar Fibra',
        'botaoDetalhes' => 'Mais detalhes'
    ],

    [
        'id' => 2,
        'produto' => 'Vivo Fibra',
        'diferencial' => 'Plano Mais Escolhido',
        'velocidade' => '500 Mega',
        'preco' => 89.99,
        'precoFormatado' => 'R$ 89,99 /mês',
        'imagem' => 'wifi_60dp_000000_FILL0_wght400_GRAD0_ops48.png',
        'observacoes' => [
            'Wi-Fi grátis',
            'Instalação sem custo'
        ],
        'botaoComprar' => 'Quero esse plano',
        'botaoDetalhes' => 'Ver detalhes'
    ],

    [
        'id' => 3,
        'produto' => 'Vivo Fibra',
        'diferencial' => '',
        'velocidade' => '700 Mega',
        'preco' => 99.99,
        'precoFormatado' => 'R$ 99,99 /mês',
        'imagem' => 'wifi_60dp_000000_FILL0_wght400_GRAD0_ops48.png',
        'observacoes' => [
            'Roteador incluso',
            'Internet de alta velocidade'
        ],
        'botaoComprar' => 'Assinar agora',
        'botaoDetalhes' => 'Conhecer plano'
    ],

    [
        'id' => 4,
        'produto' => 'Vivo Fibra',
        'diferencial' => 'Melhor Oferta',
        'velocidade' => '1 Giga',
        'preco' => 119.99,
        'precoFormatado' => 'R$ 119,99 /mês',
        'imagem' => 'wifi_60dp_000000_FILL0_wght400_GRAD0_ops48.png',
        'observacoes' => [
            'Internet de 1 Giga',
            'Wi-Fi de alta performance'
        ],
        'botaoComprar' => 'Contratar agora',
        'botaoDetalhes' => 'Mais informações'
    ]

];


$produtos = [

    [
        'id' => 1,
        'nome' => 'iPhone 16e 256GB',
        'imagem' => 'iphone16e.jpg',
        'categoria' => 'Celulares',
        'tipo' => 'celular',
        'descricao' => 'iPhone 16e com 256GB de armazenamento, excelente desempenho, câmera de alta qualidade e recursos avançados para o dia a dia.',
        'precoAvista' => 3959.10,
        'precoJuros' => 293.27,
        'parcelas' => 15
    ],

    [
        'id' => 2,
        'nome' => 'Samsung Galaxy S26 256GB',
        'imagem' => 'galaxys26.jpg',
        'categoria' => 'Celulares',
        'tipo' => 'celular',
        'descricao' => 'Samsung Galaxy S26 com 256GB de armazenamento, tela de alta qualidade, ótimo desempenho e câmeras avançadas.',
        'precoAvista' => 5219.10,
        'precoJuros' => 322.17,
        'parcelas' => 18
    ],

    [
        'id' => 3,
        'nome' => 'Smart TV Philips 50" 4K',
        'imagem' => 'televisão.jpg',
        'categoria' => 'Eletrônicos',
        'tipo' => 'televisao',
        'descricao' => 'Smart TV Philips de 50 polegadas com resolução 4K Ultra HD, tecnologia HDR, Dolby Audio e Bluetooth para uma experiência completa de entretenimento.',
        'precoAvista' => 2499.00,
        'precoJuros' => 219.90,
        'parcelas' => 12
    ],

    [
        'id' => 4,
        'nome' => 'Caixa de Som Bluetooth Portátil',
        'imagem' => 'caixa de som.jpg',
        'categoria' => 'Eletrônicos',
        'tipo' => 'caixa_som',
        'descricao' => 'Caixa de som portátil com conexão Bluetooth, bateria de longa duração e áudio potente para aproveitar suas músicas em casa ou em qualquer lugar.',
        'precoAvista' => 399.90,
        'precoJuros' => 39.99,
        'parcelas' => 10
    ],

    [
        'id' => 5,
        'nome' => 'iPhone 18 Pro 256GB',
        'imagem' => 'Iphone 18.jpg',
        'categoria' => 'Celulares',
        'tipo' => 'celular',
        'descricao' => 'iPhone 18 Pro com 256GB de armazenamento, alto desempenho, câmeras avançadas e recursos premium.',
        'precoAvista' => 10799.10,
        'precoJuros' => 666.61,
        'parcelas' => 18
    ],

    [
        'id' => 6,
        'nome' => 'Samsung Galaxy A57 256GB',
        'imagem' => 'GalaxyA57.jpg',
        'categoria' => 'Celulares',
        'tipo' => 'celular',
        'descricao' => 'Samsung Galaxy A57 com 256GB de armazenamento, tela de alta resolução, bom desempenho e câmeras de qualidade.',
        'precoAvista' => 2339.10,
        'precoJuros' => 216.58,
        'parcelas' => 12
    ],

    [
        'id' => 7,
        'nome' => 'Smart TV Philips 55" 4K',
        'imagem' => 'televisão.jpg',
        'categoria' => 'Eletrônicos',
        'tipo' => 'televisao',
        'descricao' => 'Smart TV Philips de 55 polegadas com resolução 4K, imagens nítidas e sistema inteligente para acessar seus aplicativos favoritos de streaming.',
        'precoAvista' => 2999.90,
        'precoJuros' => 269.99,
        'parcelas' => 12
    ],

    [
        'id' => 8,
        'nome' => 'Caixa de Som Bluetooth Pro',
        'imagem' => 'caixa de som.jpg',
        'categoria' => 'Eletrônicos',
        'tipo' => 'caixa_som',
        'descricao' => 'Caixa de som Bluetooth com potência elevada, conexão sem fio e bateria de longa duração, ideal para festas, viagens e momentos de lazer.',
        'precoAvista' => 599.90,
        'precoJuros' => 59.99,
        'parcelas' => 10
    ],

    [
        'id' => 9,
        'nome' => 'Samsung Galaxy S25 FE',
        'imagem' => 'Celular.jpg',
        'categoria' => 'Celulares',
        'tipo' => 'celular',
        'descricao' => 'Smartphone Samsung Galaxy S24 5G com alto desempenho, tela de excelente qualidade, câmera avançada e armazenamento para todos os seus arquivos.',
        'precoAvista' => 3299.90,
        'precoJuros' => 289.99,
        'parcelas' => 12
    ],

    [
        'id' => 10,
        'nome' => 'Iphone 16 256GB',
        'imagem' => 'Celular2.jpg',
        'categoria' => 'Celulares',
        'tipo' => 'celular',
        'descricao' => 'Smartphone Vivo com 256GB de armazenamento, tela ampla, bateria de longa duração e desempenho ideal para redes sociais, vídeos e aplicativos.',
        'precoAvista' => 1599.90,
        'precoJuros' => 149.99,
        'parcelas' => 12
    ],

    [
        'id' => 11,
        'nome' => 'Smart TV Philips 43" Full HD',
        'imagem' => 'televisão.jpg',
        'categoria' => 'Eletrônicos',
        'tipo' => 'televisao',
        'descricao' => 'Smart TV Philips de 43 polegadas com excelente qualidade de imagem, sistema inteligente e acesso rápido aos principais aplicativos de entretenimento.',
        'precoAvista' => 1799.90,
        'precoJuros' => 159.99,
        'parcelas' => 12
    ],

    [
        'id' => 12,
        'nome' => 'Caixa de Som Party Bluetooth',
        'imagem' => 'caixa de som.jpg',
        'categoria' => 'Eletrônicos',
        'tipo' => 'caixa_som',
        'descricao' => 'Caixa de som portátil desenvolvida para quem gosta de música com bastante potência, conexão Bluetooth e bateria para várias horas de reprodução.',
        'precoAvista' => 799.90,
        'precoJuros' => 79.99,
        'parcelas' => 10
    ],

    [
        'id' => 13,
        'nome' => 'Samsung Galaxy A36 5G',
        'imagem' => 'galaxyA36.jpg',
        'categoria' => 'Celulares',
        'tipo' => 'celular',
        'descricao' => 'Smartphone Samsung Galaxy A36 5G com tela grande e brilhante, ótimo desempenho, câmera versátil e armazenamento suficiente para sua rotina.',
        'precoAvista' => 1899.90,
        'precoJuros' => 169.99,
        'parcelas' => 12
    ],

    [
        'id' => 14,
        'nome' => 'Vivo Smartphone Y28 128GB',
        'imagem' => 'vivoY28.jpg',
        'categoria' => 'Celulares',
        'tipo' => 'celular',
        'descricao' => 'Smartphone Vivo com design moderno, 128GB de armazenamento, bateria de longa duração e desempenho equilibrado para as tarefas do dia a dia.',
        'precoAvista' => 1299.90,
        'precoJuros' => 119.99,
        'parcelas' => 12
    ],

    [
        'id' => 15,
        'nome' => 'Smart TV Philips 65" 4K',
        'imagem' => 'televisão.jpg',
        'categoria' => 'Eletrônicos',
        'tipo' => 'televisao',
        'descricao' => 'Smart TV Philips de 65 polegadas com resolução 4K Ultra HD, tela grande e sistema inteligente para transformar sua sala em um verdadeiro cinema.',
        'precoAvista' => 3899.90,
        'precoJuros' => 349.99,
        'parcelas' => 12
    ],

    [
        'id' => 16,
        'nome' => 'Caixa de Som Bluetooth Premium',
        'imagem' => 'caixa de som.jpg',
        'categoria' => 'Eletrônicos',
        'tipo' => 'caixa_som',
        'descricao' => 'Caixa de som Bluetooth premium com áudio potente, graves reforçados, conexão sem fio e bateria de longa duração para curtir suas músicas.',
        'precoAvista' => 999.90,
        'precoJuros' => 89.99,
        'parcelas' => 12
    ]

];


$apps = [

    [
        'id' => 1,
        'nome' => 'Vivo TV',
        'imagem' => 'vivo-tv.webp',
        'descricao' => 'TV 100% online, sem fidelidade, taxas ou instalação! Assista seus canais onde e como quiser.',
        'link' => '#',
        'preço' => 'R$ 100 /mês'
    ],

    [
        'id' => 2,
        'nome' => 'Globoplay',
        'imagem' => 'vivo-sva-globoplay-bbb-2601-406x406.webp',
        'descricao' => 'Confira novelas, séries, realitys e novidades',
        'link' => '#',
        'preço' => 'R$ 19,90 /mês'
    ],

    [
        'id' => 3,
        'nome' => 'Premiere',
        'imagem' => 'vivo-sva-premiere-brasileirao-2601-406x406.webp',
        'descricao' => 'Assista os jogos do Brasileirão e dos estaduais',
        'link' => '#',
        'preço' => 'R$ 59,90 /mês'
    ]

];


$banners = [

    [
        'id' => 1,
        'imagem' => 'vivo-pre-recarga-2512-desk-1920x471.webp',
        'tituloPequeno' => 'FAÇA AS CONTAS!',
        'titulo' => 'Recarregue, ganhe até 10 GB de bônus',
        'descricao' => 'No site e app tem mais internet para navegar como quiser.',
        'botao' => 'Fazer recarga',
        'link' => '#'
    ],

    [
        'id' => 2,
        'imagem' => 'vivo-ce-jovi-v70-2604-desk-1920x471.webp',
        'tituloPequeno' => 'FAÇA AS CONTAS!',
        'titulo' => 'Recarregue, ganhe até 10 GB de bônus',
        'descricao' => 'No site e app tem mais internet para navegar como quiser.',
        'botao' => 'Fazer recarga',
        'link' => '#'
    ],

    [
        'id' => 3,
        'imagem' => 'vivo-empresas-movel-plano-celular-2602-desk-1920x471.webp',
        'tituloPequeno' => 'FAÇA AS CONTAS!',
        'titulo' => 'Recarregue, ganhe até 10 GB de bônus',
        'descricao' => 'No site e app tem mais internet para navegar como quiser.',
        'botao' => 'Fazer recarga',
        'link' => '#'
    ]

];


$autoatendimento = [

    [
        'id' => 1,
        'titulo' => '2ª via de Fatura',
        'imagem' => 'vivo-smartphone-app-vivo-purpura-negativo-esquerda-320x320.svg'
    ],

    [
        'id' => 2,
        'titulo' => 'Consulta de saldo',
        'imagem' => 'vivo-smartphone-app-vivo-purpura-negativo-esquerda-320x320.svg'
    ],

    [
        'id' => 3,
        'titulo' => 'Ative o débito automático',
        'imagem' => 'vivo-smartphone-app-vivo-purpura-negativo-esquerda-320x320.svg'
    ],

    [
        'id' => 4,
        'titulo' => 'Pague a fatura com cartão',
        'imagem' => 'vivo-smartphone-app-vivo-purpura-negativo-esquerda-320x320.svg'
    ],

    [
        'id' => 5,
        'titulo' => 'Consulte seu consumo de internet',
        'imagem' => 'vivo-smartphone-app-vivo-purpura-negativo-esquerda-320x320.svg'
    ],

    [
        'id' => 6,
        'titulo' => 'Altere a data de vencimento',
        'imagem' => 'vivo-smartphone-app-vivo-purpura-negativo-esquerda-320x320.svg'
    ],

    [
        'id' => 7,
        'titulo' => 'Atualize seus dados cadastrais',
        'imagem' => 'vivo-smartphone-app-vivo-purpura-negativo-esquerda-320x320.svg'
    ],

    [
        'id' => 8,
        'titulo' => 'Ative ou desative serviços',
        'imagem' => 'vivo-smartphone-app-vivo-purpura-negativo-esquerda-320x320.svg'
    ]

];


$conexoes = [

    [
        'id' => 1,
        'titulo' => 'Fibra + Pós: Muito mais internet num único plano',
        'imagem' => 'vivo-devices-check-purpura-centro-320x320.svg',
        'link' => '#'
    ],

    [
        'id' => 2,
        'titulo' => 'Vivo Total',
        'imagem' => 'vivo-devices-check-purpura-centro-320x320.svg',
        'link' => '#'
    ],

    [
        'id' => 3,
        'titulo' => 'Internet Fibra para sua casa',
        'imagem' => 'vivo-devices-check-purpura-centro-320x320.svg',
        'link' => '#'
    ],

    [
        'id' => 4,
        'titulo' => 'Plano móvel para toda a família',
        'imagem' => 'vivo-devices-check-purpura-centro-320x320.svg',
        'link' => '#'
    ],

    [
        'id' => 5,
        'titulo' => 'Internet + TV para sua casa',
        'imagem' => 'vivo-devices-check-purpura-centro-320x320.svg',
        'link' => '#'
    ],

    [
        'id' => 6,
        'titulo' => 'Vivo Pós com mais internet',
        'imagem' => 'vivo-devices-check-purpura-centro-320x320.svg',
        'link' => '#'
    ],

    [
        'id' => 7,
        'titulo' => 'Vivo Controle: conexão sem complicação',
        'imagem' => 'vivo-devices-check-purpura-centro-320x320.svg',
        'link' => '#'
    ],

    [
        'id' => 8,
        'titulo' => 'Vivo Pré: internet para você aproveitar',
        'imagem' => 'vivo-devices-check-purpura-centro-320x320.svg',
        'link' => '#'
    ],

    [
        'id' => 9,
        'titulo' => 'Fibra + entretenimento para toda família',
        'imagem' => 'vivo-devices-check-purpura-centro-320x320.svg',
        'link' => '#'
    ],

    [
        'id' => 10,
        'titulo' => 'Mais velocidade e conexão para sua rotina',
        'imagem' => 'vivo-devices-check-purpura-centro-320x320.svg',
        'link' => '#'
    ]

];


$porDentro = [

    [
        'id' => 1,
        'titulo' => 'Saiba mais sobre a pesquisa de satisfação da ANATEL',
        'imagem' => 'vivo-tablet-lista-purpura-esquerda-320x320.svg',
        'botao' => 'Acessar pesquisa',
        'link' => '#'
    ],

    [
        'id' => 2,
        'titulo' => 'Saiba mais sobre o Plano de Conformidade das ofertas de banda larga',
        'imagem' => 'vivo-smartphone-app-favorito-purpura-320x320.svg',
        'botao' => 'Conhecer o plano',
        'link' => '#'
    ],

    [
        'id' => 3,
        'titulo' => 'Se você já foi cliente Vivo, agora pode consultar se tem valores a receber',
        'imagem' => 'vivo-mao-moeda-rosa-centro-320x320.svg',
        'botao' => 'Consultar valores',
        'link' => '#'
    ]

];