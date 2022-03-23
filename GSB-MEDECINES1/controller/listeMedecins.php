<?php
//HEADER
require('../vue/template/header.php');
//connexion a la base donnée 
require('../modele/connexion.php');
require('../modele/Form.php');

$button = Form::getform();

require('../vue/template/startcadre.php');
require('../vue/template/startFormPost.php');

echo $button->buttonNormal('submit','secondary','afficher les medecins','');
echo'<br>';
if (isset($_POST['medecins'])) {
    $medecins= $_POST['medecins'];

    $db = App::getDb()->query("SELECT * FROM medecin WHERE nom LIKE lower ('$medecins%') ");
    
    while ($r = $db->fetch()) {
        require('../vue/template/tableaux.php');
    }
    
}

require('../vue/template/endFormPost.php');
require('../vue/template/endcadre.php');
require('../vue/template/footer.php');
