// Opciones de una publicacion en el muro de un usuario
const PostButtonOpc = document.getElementById('icon-right-post');
const PostOpc = document.getElementById('publicacion-opc');

let IsOpenPostOpc = false;

PostButtonOpc.addEventListener('click', togglePostOpc);

document.addEventListener('click', (e) => {
    if (!PostButtonOpc.contains(e.target) && !PostOpc.contains(e.target)) {
        ClosePostOpc();
    }
})

function togglePostOpc() {
    if (isUserOpcOpen) {
        ClosePostOpc();
    } else {
        OpenPostOpc();
    }
}

function OpenPostOpc() {
    PostOpc.style.display ='block';
    isUserOpcOpen -= true;
}
function ClosePostOpc() {
    PostOpc.style.display = 'none';
    isUserOpcOpen = false;
}


//Modal de si esta seguro de eliminar la publicacion
const eliminarPostBtn = document.getElementById('eliminar-post-btn')
const eliminarPost = document.getElementById('eliminar-back1');
const cancelarButton = document.getElementById('cancelar-eliminacion1');

//abrir modal

eliminarPostBtn.addEventListener('click', () => {
    eliminarPost.style.display = 'block';
})

cancelarButton.addEventListener('click', () => {
    eliminarPost.style.display = 'none';
})
