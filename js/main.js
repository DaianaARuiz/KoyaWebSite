// Bloque de información

const infoBloque = document.getElementById('infoBloque');
document.querySelectorAll('.servicios .servicios__cajas img').forEach( (elemento) => {
    
    
    elemento.addEventListener('click', ()=> {
        const ruta = elemento.getAttribute('src');
        const descripcion = elemento.parentNode.dataset.descripcion;

        infoBloque.classList.add('activo');
        document.querySelector('#infoBloque img').src = ruta;
        document.querySelector('#infoBloque .info_bloque__descripcion').innerHTML = descripcion;
    });
});

//Cerrar bloque de información con el boton

document.querySelector('#btn-cerrar-popup').addEventListener('click', ()=>{
    infoBloque.classList.remove('activo');
})

//Cerrar todo el bloque

infoBloque.addEventListener('click', (evento) =>{
    if(evento.target.id === 'infoBloque'){
        infoBloque.classList.remove('activo')
    }else{
        '';
    }
});
 
/*


*/



