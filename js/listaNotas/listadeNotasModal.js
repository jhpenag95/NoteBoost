// Obtener el modal y el botón para abrirlo
var modal = document.getElementById("modal");
var btn = document.getElementById("modalBtn");

// Obtener el elemento de cierre del modal
var closeBtn = document.getElementsByClassName("close")[0];

// Abrir el modal cuando se hace clic en el botón
btn.onclick = function () {
    modal.style.display = "block";
}

// Cerrar el modal cuando se hace clic en el botón de cierre
closeBtn.onclick = function () {
    modal.style.display = "none";
}

// Cerrar el modal cuando se hace clic fuera del área del modal
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}