// Validación del formulario
document.getElementById("loginForm").addEventListener("submit", function (event) {
    // Limpiar los mensajes de error
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";

    // Obtener los valores de los campos
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Validar el campo de correo
    if (email.trim() === "") {
        document.getElementById("emailError").innerHTML = "Por favor, ingrese su correo";
        event.preventDefault();
    } else if (!isValidEmail(email)) {
        document.getElementById("emailError").innerHTML = "Por favor, ingrese un correo válido";
        event.preventDefault();
    }

    // Validar el campo de contraseña
    if (password.trim() === "") {
        document.getElementById("passwordError").innerHTML = "Por favor, ingrese su contraseña";
        event.preventDefault();
    } else if (!isValidPassword(password)) {
        document.getElementById("passwordError").innerHTML = "La contraseña debe tener al menos 6 caracteres, una mayúscula, una minúscula, un número y un carácter especial";
        document.getElementById("passwordError").style.color = "#26C281"; // Cambio de color a azul
        event.preventDefault();
    }
});

// Función para validar el formato de correo electrónico
function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Función para validar la contraseña
function isValidPassword(password) {
    // Al menos 6 caracteres, una mayúscula, una minúscula, un número y un carácter especial
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;
    return passwordRegex.test(password);
}

