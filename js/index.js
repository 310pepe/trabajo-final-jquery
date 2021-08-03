let eje1= document.getElementById('ejer1');
eje1.addEventListener('click',ejer);

function ejer(){
var contents = prompt("What to put in Pandora's box?", "all evils");
console.log("putting "+contents+" into Pandora's box");
$('#pandora').html(contents);
}
let eje2=document.getElementById('ejer2');
eje2.addEventListener('click',ejer1);

function ejer1(){
    var items = prompt("Horcruxes", "<li>the diary</li><li>the locket</li>");
    $('#horcruxes').html(items);
}

let eje3=document.getElementById('ejer3');
eje3.addEventListener('click',ejer3);

function ejer3()
{
    $("#fig1").css("border","2px solid red");
    $("#fig1").css("text-align","center");
    $("#fig1").css("padding","10px");
    $("#fig1 figcaption").css("background-color","gold");
}

let eje4=document.getElementById('ejer4');
eje4.addEventListener('click',ejer4);

function ejer4()
{
    $("#fig2 img").attr("src","img/img2.png");
    $("#fig2 img").attr("alt","Ron Weasley");
    $("#fig2 figcaption").html("Ron Weasley as played by Rupert Grint");
}

let eje5=document.getElementById('ejer5');
eje5.addEventListener('click', ejer5);

function ejer5()
{
    $("#fig3").hide();
}

let eje6=document.getElementById('ejer6');
eje6.addEventListener('click', ejer6);

function ejer6()
{
    $("#fig3").show();
}

let eje7=document.getElementById('ejer7');
eje7.addEventListener('click',ejer7);

function ejer7()
{
    $("#characters1 li").css("font-size","18px");   // matches 10 elts
    $("#characters1 .gryffindor").css("color","red");  // matches 5 elts
    $("#characters1 .slytherin").hide();    // matches 3 elts
}

let eje8=document.getElementById('ejer8');
eje8.addEventListener('click',ejer8);

function ejer8()
{
    $("#fig4")
    .css("border","2px solid red")
    .css("text-align","center")
    .css("padding","10px");
}

let eje9=document.getElementById('ejer9');
eje9.addEventListener('click',ejer9);

function ejer9()
{
    $("<li>")
    .html("Percy")
    .addClass("gryffindor")
    .css("text-decoration","line-through")
    .appendTo("#characters2");
}

let eje10=document.getElementById('ejer10');
eje10.addEventListener('click',ejer10);

function ejer10()
{
    $("#fig2a").removeClass("gryffindor");
    $("#fig2a").addClass("slytherin");
}

let ejers=document.getElementsByClassName('intento');



for (let i=1; i<ejers.length; i++)
{
    ejers[i].style.display='none';
}

function ocultar(ej)
{
    let ejers=document.getElementsByClassName('intento');
    for (let i=0; i<ejers.length; i++)
    {  
        ejers[i].style.display='none';
    }

    ejers[ej].style.display='block';
}

let anio=new Date();
anio=anio.getFullYear();

let hola=document.getElementById('an').innerHTML=anio;
