/*
Ficha:          2252471
Aprendiz:       Jose Daniel Bermudez Salamanca
Fecha:          03/08/2021
Objetivo:       Ejercicos jquery y reforzamiento de conocimientos
Verificado w3c
*/ 

//traer un elemento html con su id
let eje1= document.getElementById('ejer1');
//añadir un escuchador
eje1.addEventListener('click',ejer);

//funcion que se activa con el boton del ejercicio1
function ejer(){
var contents = prompt("What to put in Pandora's box?", "all evils");
console.log("putting "+contents+" into Pandora's box");
//codigo jquery
$('#pandora').html(contents);
}

//traer un elemento html con su id
let eje2=document.getElementById('ejer2');
//añadir un escuchador
eje2.addEventListener('click',ejer1);

//funcion que se activa con el boton del ejercicio2
function ejer1(){
    var items = prompt("Horcruxes", "<li>the diary</li><li>the locket</li>");
    //codigo jquery
    $('#horcruxes').html(items);
}

//traer un elemento html con su id
let eje3=document.getElementById('ejer3');
//añadir un escuchador
eje3.addEventListener('click',ejer3);

//funcion que se activa con el boton del ejercicio3
function ejer3()
{
    //codigo jquery
    $("#fig1").css("border","2px solid red");
    $("#fig1").css("text-align","center");
    $("#fig1").css("padding","10px");
    $("#fig1 figcaption").css("background-color","gold");
}

//traer un elemento html con su id
let eje4=document.getElementById('ejer4');
//añadir un escuchador
eje4.addEventListener('click',ejer4);

//funcion que se activa con el boton del ejercicio4
function ejer4()
{
    //codigo jquery
    $("#fig2 img").attr("src","img/img2.png");
    $("#fig2 img").attr("alt","Ron Weasley");
    $("#fig2 figcaption").html("Ron Weasley as played by Rupert Grint");
}

//traer un elemento html con su id
let eje5=document.getElementById('ejer5');
//añadir un escuchador
eje5.addEventListener('click', ejer5);

//funcion que se activa con el boton del ejercicio5
function ejer5()
{
    //codigo jquery
    $("#fig3").hide();
}

//traer un elemento html con su id
let eje6=document.getElementById('ejer6');
//añadir un escuchador
eje6.addEventListener('click', ejer6);

//funcion que se activa con el boton del ejercicio5
function ejer6()
{
    //codigo jquery
    $("#fig3").show();
}

//traer un elemento html con su id
let eje7=document.getElementById('ejer7');
//añadir un escuchador
eje7.addEventListener('click',ejer7);

//funcion que se activa con el boton del ejercicio6
function ejer7()
{
    //codigo jquery
    $("#characters1 li").css("font-size","18px");   // matches 10 elts
    $("#characters1 .gryffindor").css("color","red");  // matches 5 elts
    $("#characters1 .slytherin").hide();    // matches 3 elts
}

//traer un elemento html con su id
let eje8=document.getElementById('ejer8');
//añadir un escuchador
eje8.addEventListener('click',ejer8);

//funcion que se activa con el boton del ejercicio7
function ejer8()
{
    //codigo jquery
    $("#fig4")
    .css("border","2px solid red")
    .css("text-align","center")
    .css("padding","10px");
}

//traer un elemento html con su id
let eje9=document.getElementById('ejer9');
//añadir un escuchador
eje9.addEventListener('click',ejer9);

//funcion que se activa con el boton del ejercicio8
function ejer9()
{
    //codigo jquery
    $("<li>")
    .html("Percy")
    .addClass("gryffindor")
    .css("text-decoration","line-through")
    .appendTo("#characters2");
}

//traer un elemento html con su id
let eje10=document.getElementById('ejer10');
//añadir un escuchador
eje10.addEventListener('click',ejer10);

//funcion que se activa con el boton del ejercicio9
function ejer10()
{
    //codigo jquery
    $("#fig5").removeClass("gryffindor");
    $("#fig5").addClass("slytherin");
}

//llamado a la funcion para que por defecto se cargue el ejercicio1
ocultar(0);
//funcion para ocultar los ejercicios y mostrar solo el seleccionado, se require que envien el numero 
//donde se encuentra el ejercicio en el arreglo
function ocultar(ej)
{
    //arreglo con todos los divs con clase intento
    let ejers=document.getElementsByClassName('intento');
    //recorrer el arreglo
    for (let i=0; i<ejers.length; i++)
    {  
        //hacer que se oculten los ejercicios
        ejers[i].style.display='none';
    }
    //mostrar el ejercicio seleccionado
    ejers[ej].style.display='block';
}

//variable para establecer el año actual
let anio=new Date();
//obtener solo el año
anio=anio.getFullYear();

//agragar el año al html, con el span con id an
let hola=document.getElementById('an').innerHTML=anio;
