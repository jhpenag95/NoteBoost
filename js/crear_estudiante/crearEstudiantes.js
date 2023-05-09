const codigoFile = document.querySelector("[name=codigo]");
const nombreFile = document.querySelector("[name=nombre]");
const apellidoFile = document.querySelector("[name=apellido]");
const correoFile = document.querySelector("[name=correo]");
const claveFile = document.querySelector("[name=clave]");
const semestreFile = document.querySelector("[name=semestre]");
const materiaFile = document.querySelector("[name=materia]");


const validateEmptyField = (message, e) => {

    const field = e.target;
    const fieldValue = e.target.value;

    if (fieldValue.trim().length === 0) {
        field.classList.add("invalid");
        //assList.add -> agregar la clase "error"
        field.nextElementSibling.classList.add("error");
        field.nextElementSibling.innerText= message;
    }else{
        field.classList.remove("invalid");
        field.nextElementSibling.classList.remove("error");
        field.nextElementSibling.innerText="";
    }
}

codigoFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu codigo",e));
nombreFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu nombre",e));
apellidoFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu apellido",e));
correoFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu correo",e));
claveFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu clave",e));
semestreFile.addEventListener("blur", (e) => validateEmptyField("Selecciona por favor tu semestre",e));
materiaFile.addEventListener("blur", (e) => validateEmptyField("Selecciona por favor tu semestre",e));

