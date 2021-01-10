//------------------------------------------------MOSTRAR RESPUESTA--------------------------------------------
document.addEventListener("click",(e)=>{
    if(e.target.matches(".fa-plus") || e.target.matches(".fa-minus"))
    {
        let $contenedorPregunta= e.target.parentNode;
            $contenedorPadre=$contenedorPregunta.parentNode;
            $respuesta= $contenedorPadre.lastElementChild;
            
        $respuesta.classList.toggle('hidden-description');
        e.target.classList.toggle('fa-plus');
        e.target.classList.toggle('fa-minus');
    }
});
//------------------------------------------------MENU RESPONSIVE-------------------------------------------------
const $icon = document.getElementById('icon');
const $nav = document.querySelector('.nav');

$icon.addEventListener('click', ()=>{
    $nav.classList.toggle('show');
});