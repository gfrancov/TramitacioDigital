// Funcions botons mostrar procediments
function ensenyar(id) {

    document.getElementById(`toggle-fase-${id}`).setAttribute('onclick', `amagar(${id})`);
    document.getElementById(`procediments-${id}`).style.display = 'block';

    var fletxa = document.querySelectorAll(`#toggle-fase-${id}`);

}

function amagar(id) {

    document.getElementById(`toggle-fase-${id}`).setAttribute('onclick', `ensenyar(${id})`);
    document.getElementById(`procediments-${id}`).style.display = 'none';

    var fletxa = document.querySelectorAll(`#toggle-fase-${id}`);

}


window.onload = function() {

    const fases = document.querySelectorAll('.card-fase');
    fases.forEach(function (fase) {

        fase.addEventListener('mouseover', () => {
            ensenyar(fase.id);
        });

        fase.addEventListener('mouseleave', () => {
            amagar(fase.id);
        });

    });

}
