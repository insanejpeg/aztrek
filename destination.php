<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_pays = getAllEntity("pays");

getHeader("Accueil");
?>

<h2>Liste des destinations</h2>




<?php getFooter(); ?>