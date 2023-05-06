// Obtener elementos del DOM
const menuItems = document.querySelectorAll('.menu li');

// Agregar evento click a cada elemento del menú
menuItems.forEach(item => {
  item.addEventListener('click', function() {
    // Eliminar la clase "active" de todos los elementos
    menuItems.forEach(item => {
      item.classList.remove('active');
    });

    // Agregar la clase "active" al elemento seleccionado
    this.classList.add('active');
  });
});
