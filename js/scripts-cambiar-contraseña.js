document.getElementById('change-password').addEventListener('click', function() {
    const newPassword = document.getElementById('new-password');
    //Segundo input
    const reNewPassword = document.getElementById('renew-password');
    const errorNewPassword = document.getElementById('error-new-password');
    //error contrseñas no coinciden
    const errorReNewPassword = document.getElementById('error-renew-password');
    const minLength = 8

    if(newPassword.value.length < minLength) {
        newPassword.classList.add('error');
        errorNewPassword.style.display = 'block';
    } else {
        newPassword.classList.remove('error');
        newPassword.classList.add('pass');
        errorNewPassword.style.display = 'none';
    }5
    
    if(newPassword.value === reNewPassword.value) {
        errorReNewPassword.style.display = 'none';
        reNewPassword.classList.remove('error');
        reNewPassword.classList.add('pass');
    } else {
        reNewPassword.classList.add('error');
        errorReNewPassword.style.display = 'block';
    }
})

document.getElementById('confirm-button-t').addEventListener('click', function(){
    const redTextAlert = document.getElementById('hide-red-text2');
    const inputMail = document.getElementById('mail-forget-password');

    if (inputMail.length == 0 ){
        inputMail.classList.add('error');
        redTextAlert.style.display = 'block'
    } else {
        inputMail.classList.remove('error');
        redTextAlert.style.display = 'none';
    }
})


//abrir modal para cambiar la contraseña
const backModal = document.getElementById('cambiar-contraseña-configuracion');
const closeModal = document.getElementById('close-modal');
const openModal = document.getElementById('forget-password');

openModal.addEventListener('click', () => {
    backModal.style.display = 'block';
})

closeModal.addEventListener('click', () => {
    backModal.style.display = 'none';
})
