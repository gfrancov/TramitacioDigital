function comprovarContrasenya() {

    // Contrasenya
    var contrasenya = document.getElementById('password');
    var confirmar = document.getElementById('confirm-password');

    if(contrasenya.value == confirmar.value) {
        document.getElementById('crear').removeAttribute('disabled');
        document.getElementById('camp-confirmar-contrasenya').style.display = "none";
    } else {
        document.getElementById('crear').setAttribute('disabled', '');
        document.getElementById('camp-confirmar-contrasenya').style.display = "block";
    }

}

window.onload = function() {

    const confirmarContrasenya = document.getElementById('confirm-password');
    confirmarContrasenya.addEventListener('keyup', comprovarContrasenya);

    const password = document.getElementById('password');
    password.addEventListener('keyup', comprovarContrasenya);


}
