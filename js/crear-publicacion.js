//Crear un post
const backDark = document.getElementById('back-dark');
const createButton = document.getElementById('create-post-button');
const cerrarModal = document.getElementById('cancelar-button')

createButton.addEventListener('click', () => {
    backDark.style.display = 'block';
})

cerrarModal.addEventListener('click', () => {
    backDark.style.display = 'none';
})
