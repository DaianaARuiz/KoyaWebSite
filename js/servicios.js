const icon = document.getElementById('icon');
const nav = document.querySelector('.nav');

icon.addEventListener('click', ()=>{
    nav.classList.toggle('show');
});

window.addEventListener('scroll', reveal);

function reveal(){
    var reveals = document.querySelectorAll('.reveal');
    for(var i = 0; i < reveals.length; i++)
   {
        var windowheight = window.innerHeight; //altura (en pixeles) del viewport
        var revealtop = reveals[i].getBoundingClientRect().top; //devuelve el tamaño de un elemento y su posición relativa respecto al viewport
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint)
        {
            reveals[i].classList.add('active');
        }else
        {
            reveals[i].classList.remove('active');
        }   
  }
}
