<?php 
require_once __DIR__ . '/../lib/functions.php';

$utilisateur = currentUser();

?>



<div id="mobile-header">
    <a class="burger" href="#sidr-main">
        <i class="fa fa-bars" aria-hidden="true"></i>Menu
    </a>
</div>
<div id="header-nav">

    <nav id="main-nav">
        <ul class="container">
            <li><a href="destination.php">Nos destinations</a></li>
            <li><a href="#">Tourisme responsable</a></li>
            <li><a href="#">Une bonne préparation</a></li>
            <?php if (!isset($utilisateur["id"])) :  ?>
            <li><a href="#">Connexion</a></li>
            <?php else:  ?>
             <li><a href="#">Mon Compte</a></li>
              <?php endif; ?>
        </ul>
    </nav>

</div>