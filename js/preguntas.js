//RESPUESTA 1

const botonUno = document.getElementById('btn-FrequentQuestions_1');
const respuestaUno = document.getElementById('response1');

botonUno.addEventListener('click', ()=>{
    respuestaUno.classList.toggle('hidden-description');
    botonUno.classList.toggle('fa-plus','fa-minus');
    

});

document.getElementById('play-button').addEventListener('click', function(){
    var icon = document.getElementById('icon');
    icon.classList.toggle('fa-pause');
    icon.classList.toggle('fa-play');
  })

//RESPUESTA 2 

const botonDos = document.getElementById('btn-FrequentQuestions_2');
const respuestaDos = document.getElementById('response2')

botonDos.addEventListener('click', ()=>{
    respuestaDos.classList.toggle('hidden-description');
    botonDos.classList.add('fa-minus');
});

//RESPUESTA 3 

const botonTres = document.getElementById('btn-FrequentQuestions_3');
const respuestaTres = document.getElementById('response3')

botonTres.addEventListener('click', ()=>{
    respuestaTres.classList.toggle('hidden-description');
    botonTres.classList.add('fa-minus');
});

//RESPUESTA 4 

const botonCuatro = document.getElementById('btn-FrequentQuestions_4');
const respuestaCuatro = document.getElementById('response4')

botonCuatro.addEventListener('click', ()=>{
    respuestaCuatro.classList.toggle('hidden-description');
    botonCuatro.classList.add('fa-minus');
});

//RESPUESTA 5 

const botonCinco = document.getElementById('btn-FrequentQuestions_5');
const respuestaCinco = document.getElementById('response5')

botonCinco.addEventListener('click', ()=>{
    respuestaCinco.classList.toggle('hidden-description');
    botonCinco.classList.add('fa-minus');
});