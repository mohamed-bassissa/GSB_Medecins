<?php
//HEADER
require('../vue/template/header.php');
//connexion a la base donnée 
require('../modele/connexion.php'); 
require('../modele/Form.php');

$db = App::getDb()->query('SELECT DISTINCT departement FROM medecin
                            ORDER BY departement ');
require('../vue/template/startcadre.php');

require('../vue/template/startForm.php');

$form =Form::getform();
$button = Form::getform();

while ($r = $db->fetch()) {
    echo $form->option($r['departement'], $r['departement'],);  
    
}

require('../vue/template/endForm.php');
echo $button->buttonNormal('submit','secondary','afficher les medecins','');

require('../vue/template/endForm1.php');
require('../vue/template/endcadre.php');


    //FOOTER
require('../vue/template/footer.php');
?>