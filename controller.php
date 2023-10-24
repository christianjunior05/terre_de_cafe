<?php
include_once 'config.php';

if (isset($_POST['validez'])) {
    if (isset($_POST['nom'])  && isset($_POST['email'])  && isset($_POST['nom_entreprise'])  && isset($_POST['fonction'])  && isset($_POST['besoin'])  && isset($_POST['secteur'])  && isset($_POST['conso'])  && isset($_POST['sms'])) {
        $name = ($_POST['nom']);
        $email = ($_POST['email']);
        $name_entreprise = ($_POST['nom_entreprise']);
        $fonction = ($_POST['fonction']);
        $besoin = ($_POST['besoin']);
        $secteur = ($_POST['secteur']);
        $conso = ($_POST['conso']);
        $sms= ($_POST['sms']);

        $ajout_entreprise = $conn->prepare('INSERT INTO contact (nom, email, nom_entreprise, fonction, besoin, secteur, conso, sms) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $ajout_entreprise->execute(array($name, $email,$name_entreprise, $fonction,$besoin, $secteur, $conso, $sms));
       if($ajout_entreprise){
     header("Location:reponse.php");
       }else {
        echo "echec";
       }
   
    } else {
        echo "Veuillez remplir tous les champs";
        header("Location:contact.php?error= veuillez rentrez tous les champs ");
    }

}
