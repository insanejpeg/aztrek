<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_pays = getAllEntity("pays");
//debug($list_pays);

getHeader("pays");
?>

<h2>Liste des destinations</h2>

<ul>
    <?php foreach ($list_pays as $pays) : ?>
    <li>
        <a href="pays.php?id=<?php echo $pays["id"]; ?>">
            <?php echo $pays["label"]; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>

<?php getFooter(); ?>