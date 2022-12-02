const btnmobile= document.getElementById('btn-mobile');
const btnmobile1= document.getElementById('btn-mobile1');
const btnmobile2= document.getElementById('btn-mobile2');
const btnmobile3= document.getElementById('btn-mobile3');
var imgAtual= "desktop/imagens/menu.svg";
var imgAnterior="desktop/imagens/fechar.svg";
var imgAtual1= "desktop/imagens/menu.svg";
var imgAnterior1="desktop/imagens/fechar.svg";
var imgAtual2= "desktop/imagens/menu.svg";
var imgAnterior2="desktop/imagens/fechar.svg";
var imgAtual3= "desktop/imagens/menu.svg";
var imgAnterior3="desktop/imagens/fechar.svg";


function trocar() {
    document.getElementById("figura").src=imgAnterior;
    let aux=imgAtual;
    imgAtual=imgAnterior;
    imgAnterior=aux;
}

function trocar1() {
    document.getElementById("figura1").src=imgAnterior1;
    let aux1=imgAtual1;
    imgAtual1=imgAnterior1;
    imgAnterior1=aux1;
}

function trocar2() {
    document.getElementById("figura2").src=imgAnterior2;
    let aux2=imgAtual2;
    imgAtual2=imgAnterior2;
    imgAnterior2=aux2;
}

function trocar3() {
    document.getElementById("figura3").src=imgAnterior3;
    let aux3=imgAtual3;
    imgAtual3=imgAnterior3;
    imgAnterior3=aux3;
}

function mostra_menu(){
    const nav= document.getElementById('barra-de-nav');
    nav.classList.toggle('active');
}

function mostra_menu1(){
    const nav= document.getElementById('barra-de-nav1');
    nav.classList.toggle('active');
}
function mostra_menu2(){
    const nav= document.getElementById('barra-de-nav2');
    nav.classList.toggle('active');
}
function mostra_menu3(){
    const nav= document.getElementById('barra-de-nav3');
    nav.classList.toggle('active');
}

btnmobile.addEventListener('click', mostra_menu);
btnmobile1.addEventListener('click', mostra_menu1);
btnmobile2.addEventListener('click', mostra_menu2);
btnmobile3.addEventListener('click', mostra_menu3);


/*autor*/


function leiaMais() {
        var pontos=document.getElementById("pontos");
        var maisTexto=document.getElementById("mais");
        var btnLerMais=document.getElementById("btnLerMais");

        if(pontos.style.display == "none"){
            pontos.style.display="inline";
            maisTexto.style.display="none";
            btnLerMais.innerHTML="VER MAIS"    
        } else{
            pontos.style.display="none";
            maisTexto.style.display="inline";
            btnLerMais.innerHTML="VER MENOS"  
        }
}