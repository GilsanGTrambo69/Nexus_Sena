const corazonId = document.getElementById('corazon-id');
const buttonLike = document.getElementById('like-btn');

buttonLike.addEventListener('click', function() {
    corazonId.classList.toggle('like-fill')
})
