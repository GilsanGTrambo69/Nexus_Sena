const chatList = document.getElementById("chats");
const chatBox = document.getElementById("conversacion");
const toggleBtn = document.getElementById("button-chats");
const chatItems = document.querySelectorAll(".usuario-container");

// Función para alternar entre la lista de chats y la conversación en móvil
toggleBtn.addEventListener("click", function() {
// Si la lista está oculta, la mostramos y ocultamos la conversación
if (chatList.classList.contains("open")) {
    chatList.classList.remove("open");
    chatBox.classList.remove("hidden");
} else {
    chatList.classList.add("open");
    chatBox.classList.add("hidden");
}
});

// Al hacer clic en un chat de la lista, se debe mostrar la conversación
chatItems.forEach(item => {
item.addEventListener("click", function() {
    // Aquí puedes cargar la conversación correspondiente según el chat seleccionado
    // Por ejemplo, cambiar el título, cargar mensajes, etc.
    
    // En móviles, ocultar la lista y mostrar la conversación
    if (window.innerWidth <= 1000) {
    chatList.classList.remove("open");
    chatBox.classList.remove("hidden");
    }
});
});

// Cuando se redimensiona la ventana, si se vuelve a una pantalla grande, restauramos la vista original
window.addEventListener("resize", function() {
if (window.innerWidth > 1000) {
    // En pantallas grandes, ambos sections se muestran
    chatList.classList.remove("open");
    chatBox.classList.remove("hidden");
}
});



