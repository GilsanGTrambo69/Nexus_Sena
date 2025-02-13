//hacer checked y quitar el checked de un input radio



document.querySelectorAll('input[type="radio"]').forEach(radio => {
    radio.addEventListener('click', function() {
        if (this.checked === "true") {
            this.checked = false;
            this.dataset.checked = "false";
        } else {
            this.dataset.checked = "true";
        }
    })
});