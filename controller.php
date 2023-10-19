<?php
include_once 'config.php';


if (isset($_POST['validez'])) {
    if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['adresse']) and !empty($_POST['phone']) and !empty($_POST['objet'])) {
        $jour = date("Y-m-d");
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $phone = htmlspecialchars($_POST['phone']);
        $objet = htmlspecialchars($_POST['objet']);

        $pattern = '/^\+?[0-9\s.-]+$/';
        if (preg_match($pattern, $phone)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $ajout_entreprise = $conn->prepare('INSERT INTO entreprises (jour, rs, mail, adresse, tel, objet) VALUES (?, ?, ?, ?, ?, ?)');
                $ajout_entreprise->execute(array($jour, $name, $email, $adresse, $phone, $objet));
                header('Location: reponse.php');
                $_POST['jour'] = "";
                $_POST['name'] = "";
                $_POST['adresse'] = "";
                $_POST['email'] = "";
                $_POST['phone'] = "";
                $_POST['objet'] = "";
            } else {
                $er_mail = "adresse mail invalide";
            }
        } else {
            $er_tel = "Telephone invalide";
        }
    } else {
        $erreur = "Veuillez remplir tous les champs";
    }
}