function carregarVisualitzacio() {

    var contingut = document.getElementById('contingut').value;
    var titol = document.getElementById('nom').value;
    document.getElementById('contingut-visualitzacio').innerHTML = `<h2>${titol}</h2> ${contingut}`;
}

function comprovarEspais() {

    var slugSelected = document.getElementById('slug').value;
    var replaced = slugSelected.replace(/\s+/g, '-');
    document.getElementById('slug').value = replaced;

}

window.onload = function() {

    const contentBox = document.getElementById('contingut');
    contentBox.addEventListener('keyup', carregarVisualitzacio);

    const slug = document.getElementById('slug');
    slug.addEventListener('keyup', comprovarEspais);

}
