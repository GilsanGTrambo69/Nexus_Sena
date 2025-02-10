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
