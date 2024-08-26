document.addEventListener("DOMContentLoaded", function () {
    var botonesVerMas = document.getElementsByClassName("visitar");
    Array.from(botonesVerMas).forEach(function (boton, index) {
        boton.addEventListener("click", function () {
            var datosProyecto = JSON.parse(boton.getAttribute("data-proyecto"));
            abrirModal(datosProyecto);
        });
    });

    function abrirModal(proyecto) {
        document.getElementById("modal-nombre").textContent = proyecto.nombre;
        document.getElementById("modal-descripcion").textContent = proyecto.descripcion;
        document.getElementById("modal-responsable").textContent = "Responsable: " + proyecto.responsable;
        document.getElementById("modal-fecha-inicio").textContent = "Fecha de inicio: " + proyecto.fecha_inicio;
        document.getElementById("modal-fecha-fin").textContent = "Fecha de fin: " + proyecto.fecha_fin;
        document.getElementById("modal-imagen").src = proyecto.imagen;

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
