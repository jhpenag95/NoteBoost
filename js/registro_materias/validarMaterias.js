const codigoFile = document.getElementById('codigo');
const nombreFile = document.getElementById('nombre');
const descripcionFile = document.getElementById('descripcion');
const creditosFile = document.getElementById('creditos');

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

codigoFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor el códgio de la materia", e));
nombreFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor el nombre del tema", e));
descripcionFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor una descripción", e));
creditosFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por cantidad de creditos", e));
