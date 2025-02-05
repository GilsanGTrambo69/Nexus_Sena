//Modal para mencionar a un amigo
const mencionarAmigoButton = document.getElementById('mencionar-amigo');
const mencionarAmigoModal = document.getElementById('mencionar-amigo-modal');

let isModalAmigo = false;

mencionarAmigoButton.addEventListener('click', toggleAmigoModal);

document.addEventListener('click', (e) => {
    if (!mencionarAmigoButton.contains(e.target) && !mencionarAmigoModal.contains(e.target)) {
        closeAmigoModal();
    };
})

function toggleAmigoModal() {
    if (isModalAmigo) {
        closeAmigoModal();
    } else {
        openAmigoModal();
    }
}

function openAmigoModal() {
    mencionarAmigoModal.style.display = 'block';
    isModalAmigo = true;
}

function closeAmigoModal() {
    mencionarAmigoModal.style.display = 'none';
    isModalAmigo = false;
}
