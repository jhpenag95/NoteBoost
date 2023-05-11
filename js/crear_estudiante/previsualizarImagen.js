function previewImage(event) {
    const input = event.target; // Obtiene el elemento de entrada que desencadenó el evento
    const preview = document.getElementById('preview'); // Obtiene el elemento de imagen de vista previa con el id "preview"
    const storageKey = 'uploaded-image'; // Clave utilizada para almacenar la imagen en el almacenamiento local

    if (input.files && input.files[0]) { // Verifica si se seleccionó un archivo
        const reader = new FileReader(); // Crea un objeto FileReader para leer el archivo

        reader.onload = function (e) {
            preview.src = e.target.result; // Establece la fuente de la imagen de vista previa como el resultado de la lectura del archivo
            localStorage.setItem(storageKey, preview.src); // Guarda la imagen en el almacenamiento local utilizando la clave especificada
        };

        reader.readAsDataURL(input.files[0]); // Lee el archivo como una URL de datos
        preview.style.display = 'block'; // Muestra el elemento de imagen de vista previa estableciendo su estilo como "block"
    } else {
        preview.style.display = 'none'; // Oculta el elemento de imagen de vista previa estableciendo su estilo como "none"
    }
}

// Cargar imagen desde el almacenamiento local en el evento "load" de la página

window.addEventListener('load', function () {
    const preview = document.getElementById('preview'); // Obtiene el elemento de imagen de vista previa con el id "preview"
    const storageKey = 'uploaded-image'; // Clave utilizada para almacenar la imagen en el almacenamiento local
    const imageSrc = localStorage.getItem(storageKey); // Obtiene la fuente de la imagen almacenada en el almacenamiento local

    if (imageSrc) { // Verifica si hay una imagen almacenada en el almacenamiento local
        preview.src = imageSrc; // Establece la fuente de la imagen de vista previa como la imagen almacenada
        preview.style.display = 'block'; // Muestra el elemento de imagen de vista previa estableciendo su estilo como "block"
    }
});

// Limpiar el almacenamiento local al recargar la página manualmente

window.addEventListener('beforeunload', function () {
    const storageKey = 'uploaded-image'; // Clave utilizada para almacenar la imagen en el almacenamiento local
    localStorage.removeItem(storageKey); // Elimina la imagen almacenada en el almacenamiento local al descargar la página
});

