<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET["id"];
$sejour = getOneSejour($id);

$list_pictures = getAllPicturesBySejour($id);
$list_depart = getAllDepartBySejour($id);

debug($list_depart);

getHeader("séjours");
?>

<h2><?php echo $sejour["title"]; ?></h2>


<?php foreach ($list_depart as $depart) : ?>
    <article>
        <p>date : <?php echo $depart["date_start"]  ?></p>
                <!--<a class="details" href="#">détails</a>-->
                <p><?php echo $depart["date_start"]  ?></p>
    </article>
<?php endforeach; ?>

<p>Niveau : <?php echo $sejour["niveau"]; ?></p>

<?php foreach ($list_pictures as $picture) : ?>
    <article>
        <img src="upload/<?php echo $picture["filename"]; ?>" alt="<?php echo $picture["alt"]; ?>">
    </article>
<?php endforeach; ?>



<?php getFooter(); ?>