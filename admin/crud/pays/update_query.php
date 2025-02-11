<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$id = $_POST["id"];
$title = $_POST["title"];

$pays = getOneEntity("pays", $id);
$picture = !is_null($pays["picture"]) ? $pays["picture"] : ""; // Image présente avant update

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["picture"]["error"] == 0) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../upload/" . $picture);
}

// Insertion des données en BDD
updatePays($id, $title, $picture);

// Redirection vers la liste
header("Location: index.php");