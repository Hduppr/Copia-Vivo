
const ProdutoHover = document.getElementById("ProdutoHover");

ProdutoHover.addEventListener('mouseenter', () => {
    const CaixaHoverProdutos = document.getElementById("CaixaHoverProdutos");
    CaixaHoverProdutos.style.display = "block"
} );

ProdutoHover.addEventListener('mouseleave', () => {
    const CaixaHoverProdutos = document.getElementById("CaixaHoverProdutos");
    CaixaHoverProdutos.style.display = "none"
} );




/////////////////////////////////////////////////////////////////////////////////////////


const AjudaHover = document.getElementById("AjudaHover");

AjudaHover.addEventListener('mouseenter', () => {
    const CaixaHoverAjuda = document.getElementById("CaixaHoverAjuda");
    CaixaHoverAjuda.style.display = "block"
} );

AjudaHover.addEventListener('mouseleave', () => {
    const CaixaHoverAjuda = document.getElementById("CaixaHoverAjuda");
    CaixaHoverAjuda.style.display = "none"
} );




/////////////////////////////////////////////////////////////////////////////////////////


const PqvivoHover = document.getElementById("PqvivoHover");

PqvivoHover.addEventListener('mouseenter', () => {
    const CaixaHoverPqvivo = document.getElementById("CaixaHoverPqvivo");
    CaixaHoverPqvivo.style.display = "block"
} );

PqvivoHover.addEventListener('mouseleave', () => {
    const CaixaHoverPqvivo = document.getElementById("CaixaHoverPqvivo");
    CaixaHoverPqvivo.style.display = "none"
} );


const btndireita = document.getElementById("btndireita");


btndireita.addEventListener('click', ()=>{
    const Faixa = document.getElementById("Faixa");
    Faixa.classList.remove('Esquerda')
    Faixa.classList.add('Direita')
    
    
})

const btnesquerda = document.getElementById("btnesquerda");

btnesquerda.addEventListener('click', ()=>{
    const Faixa = document.getElementById("Faixa");
    Faixa.classList.remove('Direita')
    Faixa.classList.add('Esquerda')
})

const btnDireitaOfertas = document.getElementById("btnDireitaOfertas");
const RadioEsquerdaOferta = document.getElementById("RadioEsquerdaOferta");
const RadioDireitaOferta = document.getElementById("RadioDireitaOferta");
const btnEsquerdaOfertas = document.getElementById("btnEsquerdaOfertas");



btnDireitaOfertas.addEventListener('click', ()=>{
    DireitaRadioBotao("FaixaOfertas","Direita","maisDireita");
    RadioDireitaOferta.style.backgroundColor = "#609";
    btnDireitaOfertas.style.opacity = "0.3";
    RadioEsquerdaOferta.style.backgroundColor = "#a89cc8";
    btnEsquerdaOfertas.style.opacity = "1";
    
})



RadioDireitaOferta.addEventListener('click', ()=>{
    DireitaRadioBotao("FaixaOfertas","Direita","maisDireita");
    RadioDireitaOferta.style.backgroundColor = "#609";
    btnDireitaOfertas.style.opacity = "0.3";
    RadioEsquerdaOferta.style.backgroundColor = "#a89cc8";
    btnEsquerdaOfertas.style.opacity = "1";
})


btnEsquerdaOfertas.addEventListener('click', ()=>{
    EsquerdaRadioBotao("FaixaOfertas");
    RadioEsquerdaOferta.style.backgroundColor = "#609";
    btnEsquerdaOfertas.style.opacity = "0.3";

    RadioDireitaOferta.style.backgroundColor = "#a89cc8";
    btnDireitaOfertas.style.opacity = "1";
})




RadioEsquerdaOferta.addEventListener('click', ()=>{
    EsquerdaRadioBotao("FaixaOfertas");
    RadioEsquerdaOferta.style.backgroundColor = "#609";
        btnEsquerdaOfertas.style.opacity = "1";


        RadioDireitaOferta.style.backgroundColor = "#a89cc8";
        btnDireitaOfertas.style.opacity = "0.3";
    
})

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

const RadioAnuncio1 = document.getElementById("RadioAnuncio1");
const RadioAnuncio2 = document.getElementById("RadioAnuncio2");
const RadioAnuncio3 = document.getElementById("RadioAnuncio3");

let estado = 0;

setInterval(() => {
    if (estado === 0) {
        DireitaRadioBotao("FaixaBanner", "Direita", "maisDireita");
        estado = 1;
    } else if (estado === 1) {
        DireitaRadioBotao("FaixaBanner", "maisDireita", "Direita");
        estado = 2;
    } else {
        EsquerdaRadioBotao("FaixaBanner");
        estado = 0;
    }
}, 3000);


RadioAnuncio1.addEventListener('click', ()=>{
    EsquerdaRadioBotao("FaixaBanner");
    
    
})

RadioAnuncio2.addEventListener('click', ()=>{
    DireitaRadioBotao("FaixaBanner", "Direita", "maisDireita");
    
    
    
    
})

RadioAnuncio3.addEventListener('click', ()=>{
    DireitaRadioBotao("FaixaBanner", "maisDireita", "Direita");
    
    
})
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
const btnEsquerdaApps = document.getElementById("btnEsquerdaApps");
const RadioApps1 = document.getElementById("RadioApps1");
const RadioApps2 = document.getElementById("RadioApps2");
const RadioApps3 = document.getElementById("RadioApps3");
const btnDireitaApps = document.getElementById("btnDireitaApps");
let estadoApps = 0;

RadioApps1.addEventListener('click', ()=>{
    EsquerdaRadioBotao("FaixaApps");
    RadioApps1.style.backgroundColor = "#609";
    btnEsquerdaApps.style.opacity = "0.3";
    RadioApps2.style.backgroundColor = "#a89cc8";
    RadioApps3.style.backgroundColor = "#a89cc8";
    btnDireitaApps.style.opacity = "1";
    estadoApps = 1;
})
RadioApps2.addEventListener('click', ()=>{
    DireitaRadioBotao("FaixaApps", "Direita", "maisDireita");
    RadioApps2.style.backgroundColor = "#609";
    btnDireitaApps.style.opacity = "1";
    RadioApps3.style.backgroundColor = "#a89cc8";
    RadioApps1.style.backgroundColor = "#a89cc8";
    btnEsquerdaApps.style.opacity = "1";
    estadoApps = 2;
    
    
})

RadioApps3.addEventListener('click', ()=>{
    DireitaRadioBotao("FaixaApps", "maisDireita", "Direita");
    RadioApps3.style.backgroundColor = "#609";
    btnDireitaApps.style.opacity = "0.3";
    RadioApps2.style.backgroundColor = "#a89cc8";
    RadioApps1.style.backgroundColor = "#a89cc8";
    btnEsquerdaApps.style.opacity = "1";
    estadoApps = 3;
})

btnEsquerdaApps.addEventListener('click', ()=>{
    if (estadoApps <= 2){
        EsquerdaRadioBotao("FaixaApps");
        estadoApps = 1;
        RadioApps1.style.backgroundColor = "#609";
        btnEsquerdaApps.style.opacity = "0.3";
        RadioApps2.style.backgroundColor = "#a89cc8";
        RadioApps3.style.backgroundColor = "#a89cc8";
        btnDireitaApps.style.opacity = "1";
    }
    else{
        DireitaRadioBotao("FaixaApps", "Direita", "maisDireita");
        RadioApps2.style.backgroundColor = "#609";
        btnDireitaApps.style.opacity = "1";
        RadioApps3.style.backgroundColor = "#a89cc8";
        RadioApps1.style.backgroundColor = "#a89cc8";
        btnEsquerdaApps.style.opacity = "2";
        estadoApps = 2;
    }
})
btnDireitaApps.addEventListener('click', ()=>{
    if(estadoApps <= 1){
        DireitaRadioBotao("FaixaApps", "Direita", "maisDireita");
        RadioApps2.style.backgroundColor = "#609";
        btnDireitaApps.style.opacity = "1";
        RadioApps3.style.backgroundColor = "#a89cc8";
        RadioApps1.style.backgroundColor = "#a89cc8";
        btnEsquerdaApps.style.opacity = "1";
        estadoApps = 2;
    }
    else{
        DireitaRadioBotao("FaixaApps", "maisDireita", "Direita");
        RadioApps3.style.backgroundColor = "#609";
        btnDireitaApps.style.opacity = "0.3";
        RadioApps2.style.backgroundColor = "#a89cc8";
        RadioApps1.style.backgroundColor = "#a89cc8";
        btnEsquerdaApps.style.opacity = "1";
        estadoApps = 3;
    }
    
    
    
    
})

const btndireitaEletronicos = document.getElementById("btndireitaEletronicos");
const btnesquerdaEletronicos = document.getElementById("btnesquerdaEletronicos");


btndireitaEletronicos.addEventListener('click', ()=>{
    const FaixaEletronicos = document.getElementById("FaixaEletronicos");
    FaixaEletronicos.classList.remove('Esquerda')
    FaixaEletronicos.classList.add('Direita')
    
    
})


btnesquerdaEletronicos.addEventListener('click', ()=>{
    const FaixaEletronicos = document.getElementById("FaixaEletronicos");
    FaixaEletronicos.classList.remove('Direita')
    FaixaEletronicos.classList.add('Esquerda')
})

//////////////////////////////////////////////////////////////////////////////////////////////////////////////


function EsquerdaRadioBotao(faixa){
    const FaixaCerta = document.getElementById(faixa);
    FaixaCerta.classList.remove('Direita')
    FaixaCerta.classList.add('Esquerda')
    
    
}

function DireitaRadioBotao(faixa,QntDireita,removeQntDireita){
    const FaixaCerta = document.getElementById(faixa);
    FaixaCerta.classList.remove('Esquerda')
    FaixaCerta.classList.add(QntDireita)
    FaixaCerta.classList.remove(removeQntDireita)

    
}

const caixas = document.querySelectorAll('.CaixaAuto');

caixas.forEach(caixa => {
    caixa.addEventListener('mouseenter', () => {
        caixas.forEach(c => {
            if (c !== caixa) {
                c.style.opacity = '0.4';
            
            } else {
                c.style.opacity = '1';
            }
        });
    });

    caixa.addEventListener('mouseleave', () => {
        caixas.forEach(c => {
            c.style.opacity = '1';
        });
    });
});