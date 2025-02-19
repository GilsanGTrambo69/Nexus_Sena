//Crear un post
const backDark = document.getElementById('back-dark');
const createButton = document.getElementById('create-post-button');
const cerrarModal = document.getElementById('cancelar-button')
const filePreviewField = document.getElementById('filePreview');
const textPost = document.getElementById('text-post');

createButton.addEventListener('click', () => {
    backDark.style.display = 'block';
})

cerrarModal.addEventListener('click', () => {
    backDark.style.display = 'none';
    filePreviewField.innerHTML = '';
    textPost.value = '';
})
