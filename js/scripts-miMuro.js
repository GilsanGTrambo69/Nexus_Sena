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


//<!--Barra del perfil de usuario-->

const userName = document.getElementById('user-name');
const userOpc = document.getElementById('user-opc');

let isUserOpcOpen = false;

userName.addEventListener('click', toggleUserOpc);

document.addEventListener('click', (e) => {
    if (!userName.contains(e.target) && !userOpc.contains(e.target)) {
        closeUserOpc();
    }
})

function toggleUserOpc() {
    if (isUserOpcOpen) {
        closeUserOpc();
    } else {
        openUserOpc();
    }
}

function openUserOpc() {
    userOpc.style.display ='block';
    isUserOpcOpen = true;
}

function closeUserOpc() {
    userOpc.style.display = 'none';
    isUserOpcOpen = false;
}

//const notiBar = document.getElementById('notificacion-bar');
//const notiButton = document.getElementById('notifications');

const notificationBtn = document.getElementById('notifications');
const notificationModal = document.getElementById('notificacion-bar');

let IsNotificationWindowOpen = false;

notificationBtn.addEventListener('click', toggleNotificationWindow);

document.addEventListener('click', (e) => {
    if (!notificationBtn.contains(e.target) && !notificationModal.contains(e.target)) {
        closeNotificationWindow();
    }
});

function toggleNotificationWindow() {
    if (IsNotificationWindowOpen) {
        closeNotificationWindow();
    } else {
        openNotificationWindow();
    }
}

function openNotificationWindow() {
    notificationModal.style.display = 'block';
    IsNotificationWindowOpen = true;
}

function closeNotificationWindow() {
    notificationModal.style.display = 'none';
    IsNotificationWindowOpen = false;
}

