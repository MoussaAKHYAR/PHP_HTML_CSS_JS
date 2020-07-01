
/**let form_type_client = document.getElementById('form_type_client')**/


var form_type_client = document.getElementById('form_type_client');

var form_client_physique = document.getElementById('form_client_physique');

var form_client_moral = document.getElementById('form_client_moral');

var form_compte = document.getElementById('form_compte');

var form_compte_simple = document.getElementById('form_compte_simple');

var form_courant = document.getElementById('form_courant');

var form_bloque = document.getElementById('form_bloque');

var form_existant = document.getElementById('form_existant');

var valider = document.getElementById('valider');
//
var nouveau = document.getElementById('nouveau');

var physique = document.getElementById('physique');
var entreprise = document.getElementById('entreprise');
var compte_courant = document.getElementById('compte_courant');

var simple = document.getElementById('simple');
var courant = document.getElementById('courant');
var bloque = document.getElementById('bloque');


window.onload = function(){
    form_type_client.style.display = 'none';
    form_client_physique.style.display = 'none';
    form_client_moral.style.display = 'none';
    form_compte.style.display = 'none';
    form_compte_simple.style.display = 'none';
    form_courant.style.display = 'none';
    form_bloque.style.display = 'none';
    form_existant.style.display = 'none';
    valider.style.display = 'none';
}

function choixClient() {

    if (nouveau.checked){
        form_type_client.style.display = 'block';
        form_existant.style.display = 'none';

        form_client_physique.style.display = 'none';
        form_client_moral.style.display = 'none';
        form_compte.style.display = 'none';
        form_compte_simple.style.display = 'none';
        form_courant.style.display = 'none';
        form_bloque.style.display = 'none';
        valider.style.display = 'none';

    } else {
        form_existant.style.display = 'block';
        form_type_client.style.display = 'none';
        /****/

        form_client_physique.style.display = 'none';
        form_client_moral.style.display = 'none';
        form_compte_simple.style.display = 'none';
        form_compte.style.display = 'none';
        form_courant.style.display = 'none';
        form_bloque.style.display = 'none';
        valider.style.display = 'none';
    }
}

function choixTypeClient() {

    form_compte.style.display = 'block';
    if (physique.checked){
        form_client_physique.style.display = 'block';
        form_client_moral.style.display = 'none';
        compte_courant.style.display = 'block';

        simple.checked = false;
        bloque.checked = false;
        courant.checked = false;

        form_compte_simple.style.display = 'none';
        form_courant.style.display = 'none';
        form_bloque.style.display = 'none';
        valider.style.display = 'none';
    } else {
        form_client_moral.style.display = 'block';
        form_client_physique.style.display = 'none';
        compte_courant.style.display = 'none';

        simple.checked = false;
        bloque.checked = false;
        courant.checked = false;

        form_compte_simple.style.display = 'none';
        form_courant.style.display = 'none';
        form_bloque.style.display = 'none';
        valider.style.display = 'none';
    }
}

function choixTypeCompte(){

    if (simple.checked){
        form_compte_simple.style.display = 'block';
        form_courant.style.display = 'none';
        form_bloque.style.display = 'none';
    } else {
        if (courant.checked) {
            form_compte_simple.style.display = 'none';
            form_courant.style.display = 'block';
            form_bloque.style.display = 'none';
        }else{
            form_compte_simple.style.display = 'none';
            form_courant.style.display = 'none';
            form_bloque.style.display = 'block';
        }
    }
    valider.style.display = 'block';
}

function searchValid() {
    form_compte.style.display = 'block';
}
