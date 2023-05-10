const codigoFile = document.querySelector("[name=codigo]");
const nombreFile = document.querySelector("[name=nombre]");
const apellidoFile = document.querySelector("[name=apellido]");
const correoFile = document.querySelector("[name=correo]");
const claveFile = document.querySelector("[name=clave]");
const semestreFile = document.querySelector("[name=semestre]");
const materiaFile = document.querySelector("[name=materia]");
const imageFile = document.querySelector("[name=imagen]");

//funciones para errores
const setError = (message, field, esError = true) => {
    if (esError) {
        field.classList.add("invalid");
        //assList.add -> agregar la clase "error"
        field.nextElementSibling.classList.add("error");
        field.nextElementSibling.innerText = message;
    }else{
        field.classList.remove("invalid");
        field.nextElementSibling.classList.remove("error");
        field.nextElementSibling.innerText = "";
    }

}

//validando que existan datos
const validateEmptyField = (message, e) => {

    const field = e.target;
    const fieldValue = e.target.value;

    if (fieldValue.trim().length === 0) {
        setError(message, field);
    } else {
        setError("", field, false);
    }
}

//validando formato para Email
const validateEmailFormat = e => {
    const field = e.target;
    const fieldValue = e.target.value;
    const regex = new RegExp(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/);
    regex.test(field.value);

    //si el campo tiene más de 5 caracteres y no coincide con formato email
    if (fieldValue.trim().length > 5 && !regex.test(fieldValue)) {
        setError("Por favor, ingresa un correo valido", field);
    } else {
        setError("", field, false);
    }
}


//se imprime los mensajes

codigoFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu codigo", e));
nombreFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu nombre", e));
apellidoFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu apellido", e));
correoFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu correo", e));
claveFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu clave", e));
semestreFile.addEventListener("blur", (e) => validateEmptyField("Selecciona por favor tu semestre", e));
materiaFile.addEventListener("blur", (e) => validateEmptyField("Selecciona por favor tu semestre", e));

//input -> cada vez que se escribe algo en email vlisa el fromato
correoFile.addEventListener("input", validateEmailFormat);

//valiando campo timpo file -> change se ejecuta cuando campo cambia
imageFile.addEventListener("change", (e) => {
    const field = e.target;
    //Obtiene la extención de la imagen
    const fileExt = e.target.files[0].name.split(".").pop().toLowerCase();
    const allowedExt = ["jpg", "jpeg", "png", "gif"];
    //si la extención no es válida
    if (!allowedExt.includes(fileExt)) {
        setError("Error formato no valido", field);
    } else {
        setError("", field, false);
    }

});

