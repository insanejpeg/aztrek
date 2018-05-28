<!doctype html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="...">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aztrek - <?php echo $title; ?></title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>

        <header id="page-header">
            <div id="header-wrap" class="container">
                <?php getMenu(); ?>

                <div class="phone">
                    <i class="fa fa-phone fa-rotate-90"></i>
                    <p>02 99 06 10 99</p>
                </div>

                <div id="header-logo">

                    <div class="logo">
                        <p>L'aventure autrement</p>
                        <a href="index.html" title="Accueil"><img src="images/logo.svg" height="168px" width="215px" alt="Logo"></a>
                    </div>
                    <h2 id="site-title">Aztrek</h2>
                </div>

                <div class="conform">

                    <section class="connexion">
                        <h2>Connexion</h2>

                        <article id="connect">

                            <a href="#">
                                <img src="./images/points-cardinaux.svg" alt="glyph points cardinaux"
                                     height="32px"
                                     width="32px">
                            </a>
                            <ul>
                                <li><a href="#">Le chat des voyageurs</a></li>
                                <li><a href="#">Le blog des voyageurs</a></li>
                                <li><a href="#">Inscription</a></li>
                            </ul>
                        </article>
                    </section>

                    <form class="search-form" action="#" method="get">
                        <input type="text" name="keywords" value="" placeholder="Rechercher">
                        <button type="submit" name="submit-btn"><i class="fa fa-search" aria-hidden="true"></i>Valider</button>
                    </form>

                </div>

                <section class="responsable">
                    <a class="calculer" href="#">
                        <img src="./images/fleur.svg" alt="glyph le soleil et le monde"
                             height="60px"
                             width="60px"/>
                        <p>calculer <br>votre empreinte carbone</p>
                    </a>

                    <a class="compenser" href="#">
                        <img src="./images/monde.svg" alt="glyph le monde et l homme"
                             height="70px"
                             width="70px"/>
                        <p>compenser <br>votre empreinte carbone</p>
                    </a>

                </section>
            </div>
        </header>

        <main id="main">