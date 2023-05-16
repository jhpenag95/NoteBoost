const correoFile = document.getElementById('email');

// Funciones para errores
const setError = (message, field, esError = true) => {
    if (esError) {
        field.classList.add("invalid");
        field.nextElementSibling.classList.add("error");
        field.nextElementSibling.innerText = message;
    } else {
        field.classList.remove("invalid");
        field.nextElementSibling.classList.remove("error");
        field.nextElementSibling.innerText = "";
    }
}


// Validando que existan datos
const validateEmptyField = (message, e) => {
    const field = e.target;
    const fieldValue = e.target.value;

    if (fieldValue.trim().length === 0) {
        setError(message, field);
    } else {
        setError("", field, false);
    }
}

// Validando formato para Email
const validateEmailFormat = e => {
    const field = e.target;
    const fieldValue = e.target.value;
    const regex = new RegExp(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/);
    regex.test(field.value);

    if (fieldValue.trim().length > 5 && !regex.test(fieldValue)) {
        setError("Por favor, ingresa un correo válido", field);
    } else {
        setError("", field, false);
    }
}

correoFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor tu correo", e));


// Cada vez que se escribe algo en el campo de correo, se valida el formato
correoFile.addEventListener("input", validateEmailFormat);

