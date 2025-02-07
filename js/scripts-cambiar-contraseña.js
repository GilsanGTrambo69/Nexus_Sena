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
        errorNewPassword.style.display = 'none';
    }
    
    if(newPassword.value === reNewPassword.value) {
        errorReNewPassword.style.display = 'none';
        reNewPassword.classList.remove('error');
    } else {
        reNewPassword.classList.add('error');
        errorReNewPassword.style.display = 'block';
    }
})

