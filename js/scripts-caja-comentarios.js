//<!--Abrir la caja de comentarios-->

const comentButton = document.getElementById('coment-button');
const comentContainer = document.getElementById('caja-comentarios');

function toggleApartado() {
    if (comentContainer.style.display === 'none' || comentContainer.style.display === '' ) {
        comentContainer.style.display = 'block';
    } else {
        comentContainer.style.display = 'none';
    }
}
//Evento al hacer click en el boton
comentButton.addEventListener('click', toggleApartado);


document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".icon-opc-coment");
    
    buttons.forEach(button => {
        button.addEventListener("click", function (event) {
            event.stopPropagation();

            // Encuentra el modal asociado al botón actual
            const modal = button.nextElementSibling;

            if (modal) {
                modal.style.display = modal.style.display === "block" ? "none" : "block";
            }
        });
    });

    document.addEventListener("click", function (event) {
        document.querySelectorAll(".opc-coment").forEach(modal => {
            if (!modal.contains(event.target) && !modal.previousElementSibling.contains(event.target)) {
                modal.style.display = "none";
            }
        });
    });
});
