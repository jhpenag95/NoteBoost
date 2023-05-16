const materiaFile = document.getElementById('materia');
const temaFile = document.getElementById('tema');
const procentajeFile = document.getElementById('procentaje');
const descripcionFile = document.getElementById('descripcion');

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

materiaFile.addEventListener("blur", (e) => validateEmptyField("Selecciona por favor la materia", e));
temaFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor el tema", e));
procentajeFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor el porcentaje", e));
descripcionFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor una contraseña", e));
