function ensenyar(id) {

    document.getElementById(`toggle-fase-${id}`).setAttribute('onclick', `amagar(${id})`);
    console.log('Ensenyar: ' + id);
    document.getElementById(`procediments-${id}`).style.display = 'block';

    var fletxa = document.querySelectorAll(`#toggle-fase-${id}`);
    console.log(fletxa[0].innerHTML = '<i class="fa-solid fa-circle-chevron-up"></i>');

}

function amagar(id) {

    document.getElementById(`toggle-fase-${id}`).setAttribute('onclick', `ensenyar(${id})`);
    console.log('Amagar: ' + id);
    document.getElementById(`procediments-${id}`).style.display = 'none';

    var fletxa = document.querySelectorAll(`#toggle-fase-${id}`);
    console.log(fletxa[0].innerHTML = '<i class="fa-solid fa-circle-chevron-down"></i>');


}
