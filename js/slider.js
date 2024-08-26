// Obteniendo todos los elementos requeridos
const gallery  = document.querySelectorAll(".image"),
previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
closeIcon = previewBox.querySelector(".icon"),
currentImg = previewBox.querySelector(".current-img"),
totalImg = previewBox.querySelector(".total-img"),
shadow = document.querySelector(".shadow");

window.onload = () => {
    for (let i = 0; i < gallery.length; i++) {
        totalImg.textContent = gallery.length; // Pasando la longitud total de imágenes a la variable totalImg
        let newIndex = i; // Pasando el valor de i a la variable newIndex
        let clickedImgIndex; // Creando una nueva variable
        
        gallery[i].onclick = () => {
            clickedImgIndex = i; // Pasando el índice de la imagen clicada a la variable creada (clickedImgIndex)
            function preview(){
                currentImg.textContent = newIndex + 1; // Pasando el índice actual de la imagen a la variable currentImg con +1
                let imageURL = gallery[newIndex].querySelector("img").src; // Obteniendo la URL de la imagen clicada por el usuario
                previewImg.src = imageURL; // Pasando la URL de la imagen clicada a la src de previewImg
            }
            preview(); // Llamando a la función anterior
    
            const prevBtn = document.querySelector(".prev");
            const nextBtn = document.querySelector(".next");
            if(newIndex == 0){ // Si el valor del índice es igual a 0, entonces esconder prevBtn
                prevBtn.style.display = "none"; 
            }
            if(newIndex >= gallery.length - 1){ // Si el valor del índice es mayor o igual a la longitud de la galería menos 1, entonces esconder nextBtn
                nextBtn.style.display = "none"; 
            }
            prevBtn.onclick = () => { 
                newIndex--; // Decrementar índice
                if(newIndex == 0){
                    preview(); 
                    prevBtn.style.display = "none"; 
                }else{
                    preview();
                    nextBtn.style.display = "block";
                } 
            }
            nextBtn.onclick = () => { 
                newIndex++; // Incrementar índice
                if(newIndex >= gallery.length - 1){
                    preview(); 
                    nextBtn.style.display = "none";
                }else{
                    preview(); 
                    prevBtn.style.display = "block";
                }
            }
            document.querySelector("body").style.overflow = "hidden";
            previewBox.classList.add("show"); 
            shadow.style.display = "block"; 
            
            // Función para cerrar la vista previa
            const closePreview = () => {
                newIndex = clickedImgIndex; // Asignando el índice de la primera imagen clicada por el usuario a newIndex
                prevBtn.style.display = "block"; 
                nextBtn.style.display = "block";
                previewBox.classList.remove("show");
                shadow.style.display = "none";
                document.querySelector("body").style.overflow = "scroll";
            };

            // Cerrando la vista previa con el icono de cierre
            closeIcon.onclick = closePreview;

            // Cerrando la vista previa al hacer clic en el área de sombra
            shadow.onclick = closePreview;

            // Manejando eventos de teclado
            document.onkeydown = (e) => {
                if (e.key === "Escape") {
                    closePreview();
                } else if (e.key === "ArrowLeft" && newIndex > 0) {
                    prevBtn.click();
                } else if (e.key === "ArrowRight" && newIndex < gallery.length - 1) {
                    nextBtn.click();
                }
            };
        }
    } 
};
