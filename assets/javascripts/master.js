var buttonSide = document.querySelector('#buttonSide');
var app = document.querySelector('#app');

buttonSide.addEventListener('click', function() {
    app.classList.toggle('side-is-open');
});