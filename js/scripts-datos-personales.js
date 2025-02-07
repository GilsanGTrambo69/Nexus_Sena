//script del modal para esitar informacion en configuracion

const editarButton = document.getElementById('editar-button');
const editarInfoModal = document.getElementById('editar-informacion-back');
const cerrarModal = document.getElementById('cerrar-editar');
const editarDatosForm = document.getElementById('editar-datos-personales-form');

//abrir el modal
editarButton.addEventListener('click', () => {
    editarInfoModal.style.display = 'block';
})

cerrarModal.addEventListener('click', () => {
    editarInfoModal.style.display = 'none';
    //la funcionn reset() me resetea los valores de los campos en el form
    editarDatosForm.reset();
})

