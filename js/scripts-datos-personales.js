//script del modal para esitar informacion en configuracion

const editarButton = document.getElementById('editar-button');
const editarInfoModal = document.getElementById('editar-informacion-back');
const cerrarModal = document.getElementById('cerrar-editar');

//abrir el modal
editarButton.addEventListener('click', () => {
    editarInfoModal.style.display = 'block';
})

cerrarModal.addEventListener('click', () => {
    editarInfoModal.style.display = 'none';
})

