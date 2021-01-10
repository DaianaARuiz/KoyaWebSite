const icon = document.getElementById('icon');
const nav = document.querySelector('.nav');

icon.addEventListener('click', ()=>{
    nav.classList.toggle('show');
});