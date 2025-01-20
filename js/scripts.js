//<!--CAmbio de icono en el boton de like-->
    //<script></script>
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

//<!--Vista previa-->

const fileInput = document.getElementById('fileInput');
const filePreview = document.getElementById('filePreview');
const fileMap = new Map(); // Mapa para almacenar archivos únicos

fileInput.addEventListener('change', function () {
    const files = Array.from(fileInput.files);

    files.forEach(file => {
        if (!fileMap.has(file.name)) {
            // Agregar archivo al mapa para evitar duplicados
            fileMap.set(file.name, file);

            // Crear elementos para la vista previa
            const fileItem = document.createElement('div');
            fileItem.classList.add('file-item');

            const removeButton = document.createElement('button');
            removeButton.classList.add('remove-btn');
            removeButton.textContent = '×';

            // Eliminar archivo de la vista previa y del mapa
            removeButton.addEventListener('click', () => {
                fileMap.delete(file.name); // Eliminar del mapa
                fileItem.remove(); // Eliminar de la vista previa
            });

            const fileName = document.createElement('span');
            fileName.classList.add('file-name');
            fileName.textContent = file.name;

            const fileType = document.createElement('span');
            fileType.classList.add('file-type');
            fileType.textContent = file.type || 'Tipo desconocido';

            // Añadir elementos al contenedor
            fileItem.appendChild(removeButton);
            fileItem.appendChild(fileName);
            fileItem.appendChild(fileType);

            filePreview.appendChild(fileItem);
        }
    });

    // Resetear el input para permitir volver a seleccionar los mismos archivos
    fileInput.value = '';
});




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




const sidebar = document.getElementById('sidebar');
const sidebarToggle = document.getElementById('sidebarToggle');

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});

// Cerrar el sidebar si se hace clic fuera de él
document.addEventListener('click', (event) => {
    const isClickInsideSidebar = sidebar.contains(event.target);
    const isClickOnToggleButton = sidebarToggle.contains(event.target);

    if (!isClickInsideSidebar && !isClickOnToggleButton && sidebar.classList.contains('active')) {
        sidebar.classList.remove('active');
    }
});

// Función para manejar cambios en el tamaño de la ventana
function handleResize() {
    if (window.innerWidth > 768) {
        sidebar.classList.remove('active');
    }
}

// Agregar listener para el evento resize
window.addEventListener('resize', handleResize);

// Llamar a handleResize inicialmente para establecer el estado correcto
handleResize();

