//eliminar un amigo de la lista de amigos
const buttonEliminar = document.getElementById('eliminar1');
const eliminarModal1 = document.getElementById('eliminar-back2');
const cancelarEliminarButton = document.getElementById('cancelar-eliminacion2');

buttonEliminar.addEventListener('click', () => {
    eliminarModal1.style.display = 'block';
})

cancelarEliminarButton.addEventListener('click', () => {
    eliminarModal1.style.display = 'none';
})

