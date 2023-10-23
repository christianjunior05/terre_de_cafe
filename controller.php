<?php
include_once 'config.php';

if (isset($_POST['validez'])) {
    if (isset($_POST['nom'])  && isset($_POST['email'])  && isset($_POST['nom_entreprise'])  && isset($_POST['fonction'])  && isset($_POST['secteur'])  && isset($_POST['conso'])  && isset($_POST['sms'])) {

        $name = ($_POST['nom']);
        $email = ($_POST['email']);
        $name_entreprise = ($_POST['nom_entreprise']);
        $fonction = ($_POST['fonction']);
        $secteur = ($_POST['secteur']);
        $conso = ($_POST['conso']);
        $sms= ($_POST['sms']);

        $ajout_entreprise = $conn->prepare('INSERT INTO contact (nom, email, nom_entreprise, fonction, secteur, conso, sms) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $ajout_entreprise->execute(array($name, $email,$name_entreprise, $fonction, $secteur, $conso, $sms));
       if($ajout_entreprise){
        echo "succes";
       }else {
        echo "echec";
       }
        // $_POST['nom'] = "";
        // $_POST['email'] = "";
        // $_POST['nom_entreprise'] = "";
        // $_POST['fonction'] = "";
        // $_POST['secteur'] = "";
        // $_POST['conso'] = "";
        // $_POST['sms'] = "";
    } else {
       echo  "adresse mail invalide";
    }

} else {
    echo "Veuillez remplir tous les champs";
}
