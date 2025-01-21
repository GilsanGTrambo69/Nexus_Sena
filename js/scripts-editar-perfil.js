//Modal cambiar foto de perfil
const cambiarBack1 = document.getElementById('cambiar-back1');
const cambiarButton1 = document.getElementById('cambiar-foto');

cambiarButton1.addEventListener('click', () => {
    cambiarBack1.style.display = 'block';
})

cambiarBack1.addEventListener('click', (e) => {
    if(cambiarBack1 === e.target) {
        cambiarBack1.style.display = 'none';
    }
})


//Modal cambiar foto de Portada
const cambiarBack2 = document.getElementById('cambiar-back2');
const cambiarButton2 = document.getElementById('cambiar-portada');

cambiarButton2.addEventListener('click', () => {
    cambiarBack2.style.display = 'block';
})

cambiarBack2.addEventListener('click', (e) => {
    if(cambiarBack2 === e.target) {
        cambiarBack2.style.display = 'none';
    }
})

//<!--Vista previa 1-->

const fileInput = document.getElementById('fileInput1');
const filePreview = document.getElementById('filePreview1');
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
            removeButton.textContent = 'x';

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


//<!--Vista previa 2-->

const fileInput2 = document.getElementById('fileInput2');
const filePreview2 = document.getElementById('filePreview2');
const fileMap2 = new Map(); // Mapa para almacenar archivos únicos

fileInput2.addEventListener('change', function () {
    const files = Array.from(fileInput2.files);

    files.forEach(file => {
        if (!fileMap2.has(file.name)) {
            // Agregar archivo al mapa para evitar duplicados
            fileMap2.set(file.name, file);

            // Crear elementos para la vista previa
            const fileItem = document.createElement('div');
            fileItem.classList.add('file-item');

            const removeButton = document.createElement('button');
            removeButton.classList.add('remove-btn');
            removeButton.textContent = 'x';

            // Eliminar archivo de la vista previa y del mapa
            removeButton.addEventListener('click', () => {
                fileMap2.delete(file.name); // Eliminar del mapa
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

            filePreview2.appendChild(fileItem);
        }
    });

    // Resetear el input para permitir volver a seleccionar los mismos archivos
    fileInput2.value = '';
});

