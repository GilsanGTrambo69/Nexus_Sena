const backCrearEncuesta = document.getElementById('back-crear-encuesta')
const closeButtonEncuesta = document.getElementById('cancelar-encuesta')
const openButtonEncuesta = document.getElementById('crear-encuesta-button');
const tituloEncuesta = document.getElementById('titulo-encuesta');

openButtonEncuesta.addEventListener('click', () => {
    backCrearEncuesta.style.display = 'block';
})
closeButtonEncuesta.addEventListener('click', () => {
    backCrearEncuesta.style.display = 'none';
})

//Agregar una opcion en la creacion de una encuesta

//cantidad de opciones creando una encuesta
let contador = 0; // Contador de opciones
var nul = null;

document.getElementById("agregar-opcion").addEventListener("click", function () {
    contador++;
    let limiteOpciones = 9;
    if (contador >= limiteOpciones) {
        alert("limite de opciones alcanzado");
        return;
    }
    closeButtonEncuesta.addEventListener('click', function(){
        container.innerHTML = '';
        tituloEncuesta.value = "";
        contador = 0
    } )

    const labelContainer = document.createElement("label");
    labelContainer.className = "label-container";

    const circle = document.createElement("input");
    circle.type = "checkbox";

    const spanCheckbox = document.createElement("span");
    spanCheckbox.className = "checkmark"

    labelContainer.appendChild(circle);
    labelContainer.appendChild(spanCheckbox);


    const container = document.getElementById("opciones-container");
    const div = document.createElement("div");
    div.className = "input-container-e";
    
    const input = document.createElement("input");
    input.type = "text";
    input.className = "input-opcion"
    input.placeholder = `Opción ${contador}`;

    const botonEliminar = document.createElement("button");
    botonEliminar.innerText = "Eliminar";
    botonEliminar.className = "btn btn-remove";
    botonEliminar.addEventListener("click", function () {
        div.remove();
        actualizarMarcadores();
    });

    //div.appendChild(labelContainer)
    div.appendChild(input);
    div.appendChild(botonEliminar);
    container.appendChild(div);
});

function actualizarMarcadores() {
    const inputs = document.querySelectorAll("#opciones-container input[type='text']");
    contador = 0;
        inputs.forEach((input, index) => {
            contador++;
            input.placeholder = `Opción ${contador}`;
        
    })
} 

