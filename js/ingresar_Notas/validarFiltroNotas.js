const semesterFile = document.getElementById('semester');
const groupFile = document.getElementById('group');
const topicFile = document.getElementById('topic');

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

semesterFile.addEventListener("blur", (e) => validateEmptyField("Selecciona por favor el semestre", e));
groupFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor el grupo", e));
topicFile.addEventListener("blur", (e) => validateEmptyField("Ingresa por favor el tema", e));
