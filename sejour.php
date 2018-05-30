<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET["id"];
$sejour = getOneSejour($id);

$list_pictures = getAllPicturesBySejour($id);
$list_depart = getAllDepartBySejour($id);
$list_commentaire = getAllcommentaireBySejour($id);

//debug($commentaire);

getHeader("séjours");?>


<h2><?php echo $sejour["title"]; ?></h2>
<?php foreach ($list_depart as $depart) : ?>
    <article>
        <p>date : <?php echo $depart["date_start"]  ?> - <?php echo $depart["date_end"]  ?></p>
    </article>
<?php endforeach; ?>


<p>Niveau : <?php echo $sejour["niveau"]; ?></p>
<p><?php echo $sejour["description"]; ?></p>


<?php foreach ($list_commentaire as $commentaire) : ?>
<article>
    <p>mon avis sur cet aventure : <?php echo $commentaire["commentaire"]; ?></p>
    <p>mon évaluation sur cette aventure : <?php echo $commentaire["grade"]; ?></p>
</article>
<?php endforeach; ?>


<?php foreach ($list_pictures as $picture) : ?>
    <article>
        <img src="upload/<?php echo $picture["filename"]; ?>" alt="<?php echo $picture["alt"]; ?>">
    </article>
<?php endforeach; ?>


<?php getFooter(); ?>