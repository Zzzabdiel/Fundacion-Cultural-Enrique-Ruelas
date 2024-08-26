document.addEventListener("DOMContentLoaded", function () {
    var botonesVerMas = document.getElementsByClassName("visitar");
    Array.from(botonesVerMas).forEach(function (boton, index) {
        boton.addEventListener("click", function () {
            var datosEditorial = JSON.parse(boton.getAttribute("data-editorial"));
            abrirModal(datosEditorial);
        });
    });

    function abrirModal(editorial) {
        document.getElementById("modal-titulo").textContent = editorial.titulo;
        document.getElementById("modal-contenido").textContent = editorial.contenido;
        document.getElementById("modal-autor").textContent = "Autor: " + editorial.autor;
        document.getElementById("modal-imagen").src = editorial.imagen;

        var modal = document.getElementById("modal");
        modal.style.display = "block";

        var span = document.getElementsByClassName("close")[0];
        span.onclick = function () {
            modal.style.display = "none";
        };

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    }
    
});

