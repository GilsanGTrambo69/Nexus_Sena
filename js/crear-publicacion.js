//Crear un post
const backDark = document.getElementById('back-dark');
const createButton = document.getElementById('create-post-button');
const createPost = document.getElementById('create-post');
const cerrarModal = document.getElementById('cancelar-button')

createButton.addEventListener('click', () => {
    backDark.style.display = 'block';
    createPost.style.display = 'block';
})

cerrarModal.addEventListener('click', (e) => {
    if (cerrarModal === e.target) {
        createPost.style.display = 'none';
        backDark.style.display = 'none';
    }
})
