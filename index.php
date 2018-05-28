<?php

require_once 'lib/functions.php';

getHeader("Accueil", "header_home.php");
?>


<section id="slider" class="owl-carousel">
    <article class="item">
        <img src="./images/carousel.jpg" alt="xx">
    </article>

    <article class="item">
        <img src="./images/carousel2.jpg" alt="xx">
    </article>

    <article class="item">
        <img src="./images/carousel3.jpg" alt="xx">
    </article>
</section>


<article class="articlebody">
    <header id="promotion">

        <h2>La promotion</h2>
        <h3> GUATEMALA</h3>
        <h4>Sur les traces du passé</h4>
    </header>
    <div class="prom">
        <img src="./images/photo-guatemala.jpg" alt="guatemala">
    </div>
    <div class="comprom">
        <p>date : 15/04/2018 au 30/04/2018</p>
        <a class="com" href="#">Les commentaires des voyageurs</a>
    </div>
    <p>Pour les amateurs d'histoire et/ou passionnés d'archéologie, réservez-vous 10 à 12 jours pour partir à l'exploration du passé maya du Guatemala. Pendant tout le séjour, vous serez entouré de forêts tropicales et voyagerez surtout vers la partie
        nord du pays. Le Guatemala est une destination qui devient un peu plus populaire chaque année, mais dans la plupart des villages et sites archéologiques conseillés ci-dessous, c'est plutôt un sentiment d'Indiana Jones des temps modernes qui prévaudra
        (encore très peu de tourisme dans ces différents lieux)!</p>

    <p>3500 Euros HT</p>

</article>
<!-- ***************************************************************

                  top3
****************************************************************** -->

<section id="top3">
    <h2>Le top 3 des voyageurs</h2>
    <div class="top">
        <article>
            <h3>SALVADOR</h3>
            <h4>Trésors du Salvador</h4>
            <div class="cont-img">
                <img src="./images/salvador.jpg" alt="salvador">
                <img class="niveau" src="./images/eagle.svg" alt="glyph-niveau" height="35px" width="35px">
            </div>

            <div class="tailrond">
                <p>date : 15/04/2018 au 30/04/2018</p>
                <a class="details" href="#">détails</a>
            </div>
            <p>4500 Euros HT</p>
            <a class="com" href="#">Leur commentaires</a>
        </article>

        <article>
            <h3>HONDURAS</h3>
            <h4>Terre Maya</h4>
            <div class="cont-img">
                <img src="./images/honduras.jpg" alt="honduras">
                <img class="niveau" src="./images/monkey.svg" alt="glyph-niveau" height="35px" width="35px">
            </div>
            <div class="tailrond">
                <p>date : 15/04/2018 au 30/04/2018</p>
                <a class="details" href="#">détails</a>
            </div>
            <p>3500 Euros HT</p>
            <a class="com" href="#">Leur commentaires</a>
        </article>

        <article>
            <h3>COSTARICA</h3>
            <h4>Entre terre et jungle</h4>
            <div class="cont-img">
                <img src="./images/costarica.jpg" alt="costarica">
                <img class="niveau" src="./images/jaguar.svg" alt="glyph-niveau" height="35px" width="35px">
            </div>
            <div class="tailrond">
                <p>date : 15/04/2018 au 30/04/2018</p>
                <a class="details" href="#">détails</a>
            </div>


            <p>3500 Euros HT</p>
            <a class="com" href="#">Leur commentaires</a>
        </article>
    </div>

</section>

<?php getFooter(); ?>