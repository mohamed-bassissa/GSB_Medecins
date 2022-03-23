<?php
// header
require('../vue/template/header.php');
//connexion a la base donnée 
require('../modele/connexion.php'); 
require('../modele/Form.php');

$b = Form::getform();

require('../vue/template/startcadre.php');
echo $b->buttonNormal('submit','secondary','Liste des médecins par département','accueill');

echo $b->buttonNormal('submit','secondary','liste des médecins par nom','listeMedecins');
require('../vue/template/startcadre.php');


//footer
require('../vue/template/footer.php');
