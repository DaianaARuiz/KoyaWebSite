//RESPUESTA 1

const botonUno = document.getElementById('btn-FrequentQuestions_1');
const respuestaUno = document.getElementById('response1');
const clickUno = document.getElementById('play-boton_1');

clickUno.addEventListener('click', ()=>{
    respuestaUno.classList.toggle('hidden-description');
    botonUno.classList.toggle('fa-plus');
    botonUno.classList.toggle('fa-minus');
});

//RESPUESTA 2 

const botonDos = document.getElementById('btn-FrequentQuestions_2');
const respuestaDos = document.getElementById('response2');
const clickDos = document.getElementById('play-boton_2');

clickDos.addEventListener('click', ()=>{
    respuestaDos.classList.toggle('hidden-description');
    botonDos.classList.toggle('fa-plus');
    botonDos.classList.toggle('fa-minus');
});

//RESPUESTA 3 

const botonTres = document.getElementById('btn-FrequentQuestions_3');
const respuestaTres = document.getElementById('response3');
const clickTres = document.getElementById('play-boton_3');

clickTres.addEventListener('click', ()=>{
    respuestaTres.classList.toggle('hidden-description');
    botonTres.classList.toggle('fa-plus');
    botonTres.classList.toggle('fa-minus');
});

//RESPUESTA 4 

const botonCuatro = document.getElementById('btn-FrequentQuestions_4');
const respuestaCuatro = document.getElementById('response4')
const clickCuatro = document.getElementById('play-boton_4');

clickCuatro.addEventListener('click', ()=>{
    respuestaCuatro.classList.toggle('hidden-description');
    botonCuatro.classList.toggle('fa-plus');
    botonCuatro.classList.toggle('fa-minus');
});

//RESPUESTA 5 

const botonCinco = document.getElementById('btn-FrequentQuestions_5');
const respuestaCinco = document.getElementById('response5');
const clickCinco = document.getElementById('play-boton_5');

clickCinco.addEventListener('click', ()=>{
    respuestaCinco.classList.toggle('hidden-description');
    botonCinco.classList.toggle('fa-plus');
    botonCinco.classList.toggle('fa-minus');
});