//script para abrir el modal para crear una notica

const backDarkModal = document.getElementById('back-dark5');
const openModalNotice = document.getElementById('crear-noticia');
const closeModalNotice = document.getElementById('close-notice');
const previewModal = document.getElementById('filePreview');
const title = document.getElementById('titulo-noticia');
const subTitle = document.getElementById('subtitulo-noticia');
const descriptionNotice = document.getElementById('descripcion-noticia');


openModalNotice.addEventListener('click', () => {
    backDarkModal.style.display = 'block';
})
closeModalNotice.addEventListener('click', () => {
    backDarkModal.style.display = 'none';
    previewModal.innerHTML = '';
    title.value = '';
    subTitle.value = '';
    descriptionNotice.value = '';
})
