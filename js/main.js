// Selecciona la barra de navegación
const navbar = document.querySelector('.navbar');

// Selecciona el botón de alternar la barra lateral
const btnToggle = document.querySelector('.toggle-btn');

// Agrega un evento de clic al botón de alternar la barra lateral
btnToggle.addEventListener('click', function () {
    document.getElementById('sidebar').classList.toggle('active');
});


