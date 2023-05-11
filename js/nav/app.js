let arrow = document.querySelectorAll(".arrow"); // Selecciona todos los elementos con la clase "arrow"
for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; // Selecciona el elemento padre del elemento "arrow"
        arrowParent.classList.toggle("showMenu"); // Agrega o quita la clase "showMenu" al elemento padre
    });
}

let sidebar = document.querySelector(".sidebar"); // Selecciona el elemento con la clase "sidebar"
let sidebarBtn = document.querySelector(".bx-menu"); // Selecciona el elemento con la clase "bx-menu"
console.log(sidebarBtn); // Imprime el elemento "sidebarBtn" en la consola
sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close"); // Agrega o quita la clase "close" al elemento "sidebar"
});
