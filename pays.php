<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);
// Récupérer la liste des destinations du pays
$list_sejours = getAllSejoursByPays($id);

//debug($list_sejours);

getHeader("séjours");
?>

<h2><?php echo $pays["label"]; ?></h2>

<?php foreach ($list_sejours as $sejour) : ?>

    <?php include 'include/sejour_inc.php'; ?>

<?php endforeach; ?>


<?php getFooter(); ?>


