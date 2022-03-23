<?php
//HEADER
require('../vue/template/header.php');
//connexion a la base donnée 
require('../modele/connexion.php'); 

    $departement= $_GET['list'];
    $req = App::getDb()->query("SELECT * FROM medecin WHERE departement = ".$departement."");
    if(isset($_GET['list'])){
    require('../vue/template/startContainer.php');
    while ($r = $req->fetch()) {
        require('../vue/template/tableaux.php');
        
    }
    require('../vue/template/endContainer.php');

}

require('../vue/template/footer.php');