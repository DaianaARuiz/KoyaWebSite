//Para Nombre
const labelNombre = document.getElementById('nameLabel');
const inputName = document.getElementById('name');

inputName.addEventListener('click', () =>{
    labelNombre.classList.add('lblActivo');
})

inputName.addEventListener('blur', (evento) =>{
    if(evento.target.value.trim() !== ''){
        labelNombre.classList.add('lblActivo');
    }else{
        labelNombre.classList.remove('lblActivo');
    }
})

//Para Subject
const labelSubject = document.getElementById('subjectLabel');
const inputSubjet = document.getElementById('subject');

inputSubjet.addEventListener('click', () =>{
    labelSubject.classList.add('lblActivo');
})

inputSubjet.addEventListener('blur', (evento) =>{
    if(evento.target.value.trim() !== ''){
        labelSubject.classList.add('lblActivo');
    }else{
        labelSubject.classList.remove('lblActivo');
    }
})

//Para Mail
const labelMail = document.getElementById('emailLabel');
const inputMail = document.getElementById('email');

inputMail.addEventListener('click', () =>{
    labelMail.classList.add('lblActivo');
})

inputMail.addEventListener('blur', (evento) =>{
    if(evento.target.value.trim() !== ''){
        labelMail.classList.add('lblActivo');
    }else{
        labelMail.classList.remove('lblActivo');
    }
})

//Para el textArea
const textareaLabel = document.getElementById('textareaLabel');
const inputTextarea = document.getElementById('message');

inputTextarea.addEventListener('click', () =>{
    textareaLabel.classList.add('lblActivo');
})

inputTextarea.addEventListener('blur', (evento) =>{
    if(evento.target.value.trim() !== ''){
        textareaLabel.classList.add('lblActivo');
    }else{
        textareaLabel.classList.remove('lblActivo');
    }
})

//Responsive

const icon = document.getElementById('icon');
const nav = document.querySelector('.nav');

icon.addEventListener('click', ()=>{
    nav.classList.toggle('show');
});

