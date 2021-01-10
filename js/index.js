window.addEventListener('DOMContentLoaded ',()=>{
    document.querySelector(".home__contenido").classList.add("animate__animated","animate__backInLeft");
    // document.querySelector(".home__btn").classList.add("animate__animated","animate__backInLeft");
});

const icon = document.getElementById('icon');
const nav = document.querySelector('.nav');

icon.addEventListener('click', ()=>{
    nav.classList.toggle('show');
});

window.addEventListener('scroll',()=>{
    let $infoNosotros=document.querySelector(".home-informacion__parrafos");
    let tamañoPantalla= window.innerHeight/3;
    let posicionObj1= $infoNosotros.getBoundingClientRect().top;

    if(posicionObj1<tamañoPantalla){
        $infoNosotros.classList.remove("hidden");
        $infoNosotros.classList.add("animate__animated","animate__fadeInUp");
    }
});
