function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('preview');
    const storageKey = 'uploaded-image';

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
            localStorage.setItem(storageKey, preview.src); // Guardar imagen en el almacenamiento local
        };

        reader.readAsDataURL(input.files[0]);
        preview.style.display = 'block';
    } else {
        preview.style.display = 'none';
    }
}

// Cargar imagen desde el almacenamiento local en el evento "load" de la página
window.addEventListener('load', function () {
    const preview = document.getElementById('preview');
    const storageKey = 'uploaded-image';
    const imageSrc = localStorage.getItem(storageKey);

    if (imageSrc) {
        preview.src = imageSrc;
        preview.style.display = 'block';
    }
});

// Limpiar el almacenamiento local al recargar la página manualmente
window.addEventListener('beforeunload', function () {
    const storageKey = 'uploaded-image';
    localStorage.removeItem(storageKey);
});
