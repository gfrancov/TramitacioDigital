function carregarVisualitzacio() {

    const previewIcona = document.getElementById('preview-icona');
    previewIcona.innerHTML = "<i class='fa-solid " + document.getElementById('icona').value + "'></i>";

}

function comprovarEspais() {

    var slugSelected = document.getElementById('slug').value;
    var replaced = slugSelected.replace(/\s+/g, '-');
    document.getElementById('slug').value = replaced;

}

window.onload = function() {

    const iconaText = document.getElementById('icona');
    iconaText.addEventListener('keyup', carregarVisualitzacio);

    const slug = document.getElementById('slug');
    slug.addEventListener('keyup', comprovarEspais);

}
