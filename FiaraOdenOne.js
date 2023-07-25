document.querySelector('.custom-file-input').addEventListener('click', function() {
    document.querySelector('#file-input').click();
});

document.querySelector('#file-input').addEventListener('change', function() {
    //código para guardar la imagen

    if (this.files == undefined) {
    
    } else {
        document.querySelector(".custom-file-input").textContent = "Imagen subida";
    }
    
});


