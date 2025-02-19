//Sidebar
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

const busquedaReciente = document.getElementById('busqueda-reciente-bar');
const searchBar = document.getElementById('search-bar');
const buttonSearch = document.getElementById('button-search');

//evento click con una funcion para abrir el modal
searchBar.addEventListener('click', function(){
    busquedaReciente.style.display = 'block';
})

document.addEventListener('click', function (e) {
    if (!searchBar.contains(e.target) && !busquedaReciente.contains(e.target) && !buttonSearch.contains(e.target)) {
        busquedaReciente.style.display = 'none';
    }
});


