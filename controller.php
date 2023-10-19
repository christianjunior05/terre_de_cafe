<?php
include_once 'config.php';


if (isset($_POST['validez'])) {
    if (!empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['nom_entreprise']) and !empty($_POST['fonction']) and !empty($_POST['secteur']) and !empty($_POST['conso'])) {
       
        $name = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $name_entreprise = htmlspecialchars($_POST['nom_entreprise']);
        $function = htmlspecialchars($_POST['function']);
        $secteur = htmlspecialchars($_POST['secteur']);
        $conso = htmlspecialchars($_POST['conso']);

        $pattern = '/^\+?[0-9\s.-]+$/';
        
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $ajout_entreprise = $conn->prepare('INSERT INTO contact (jour, rs, mail, adresse, tel, objet) VALUES (?, ?, ?, ?, ?, ?)');
                $ajout_entreprise->execute(array($jour, $name, $email, $adresse, $phone, $objet));
                header('Location: reponse.php');
                $_POST['nom'] = "";
                $_POST['email'] = "";
                $_POST['nom_entreprise'] = "";
                $_POST['fonction'] = "";
                $_POST['secteur'] = "";
                $_POST['conso'] = "";
            } else {
                $er_mail = "adresse mail invalide";
            }
         else {
            $er_tel = "Telephone invalide";
        }
    } else {
        $erreur = "Veuillez remplir tous les champs";
    }
}