//Para name
const labelNombre = document.getElementById('nameLabel');
const inputName = document.getElementById('name');

inputName.addEventListener('click', () =>{
    labelNombre.classList.add('lblActivo');
})

inputName.addEventListener('blur', () =>{
    labelNombre.classList.remove('lblActivo');
})

//Para Subject

const labelSubject = document.getElementById('subjectLabel');
const inputSubjet = document.getElementById('subject');

inputSubjet.addEventListener('click', () =>{
    labelSubject.classList.add('lblActivo');
})

inputSubjet.addEventListener('blur', () =>{
    labelSubject.classList.remove('lblActivo');
})

//Para Mail

const labelMail = document.getElementById('emailLabel');
const inputMail = document.getElementById('email');

inputMail.addEventListener('click', () =>{
    labelMail.classList.add('lblActivo');
})

inputMail.addEventListener('blur', () =>{
    labelMail.classList.remove('lblActivo');
})

//Para el text Area

const textareaLabel = document.getElementById('textareaLabel');
const inputTextarea = document.getElementById('message');

inputTextarea.addEventListener('click', () =>{
    textareaLabel.classList.add('lblActivo');
})

inputTextarea.addEventListener('blur', () =>{
    textareaLabel.classList.remove('lblActivo');
})

