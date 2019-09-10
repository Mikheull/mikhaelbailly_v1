<section class="header bg-dark">
    <?php require_once ('src/View/components/navbar-header.php') ;?>

    <div class="container-fluid">
        <div class="container" id="head-container">

            <div class="row margin-top-lg">
                <div class="col-lg-5 col-11 align-self-center" id="head-info" data-aos="fade-up" data-aos-duration="600">
                    <h1 class="title-lg bold color-lg-light margin-bot">Mikhaël Bailly</h1>
                    <h2 class="title-sm color-gray">Développeur Web Front-end et Back-end à Paris.</h2>
                    <div class="margin-top-lg"> <a href="<?= $router -> rootUrl() ;?>job" target="blank" title="Voir mon profil" class="btn primary-btn">Voir mon CV</a> </div>
                </div>

                <div class="col-lg-7 col-11 align-self-end text-align-center" id="head-illustration" data-aos="fade-left" data-aos-duration="500">
                    <img src="<?= $router -> rootUrl() ;?>public/images/illustrations/header_illustration.svg" alt="Illustration " width="70%">
                </div>
            </div>

        </div>
    </div>
</section>



<section id="home_presentation" class="mt-5">
    <div class="container">
        <div class="row heading">
            <div class="col-md-6 offset-md-3 col-10 offset-1 text-align-center"> 
                <img src="<?= $router -> rootUrl() ;?>public/images/icons/about-me_icon.svg" alt="Icon" width="64px"> 
                <h3 class="title-md bold color-lg-dark margin-bot">A propos de moi</h3>
            </div>
        </div>

        <div class="row pres-element mt-5 mb-5" data-aos="fade-left" data-aos-duration="700" data-aos-once="true">
            <div class="col-md-6 offset-md-0 col-10 offset-1 illustration text-align-left order-md-1 order-2 mt-sm-3"> <img src="<?= $router -> rootUrl() ;?>public/images/illustrations/creative_illustration.svg" alt="Illustration" width="80%"> </div>
            <div class="col-md-6 offset-md-0 col-10 offset-1 heading align-self-center order-md-2 order-1">
                <h2 class="title-sm bold color-dark margin-bot margin-left">Je suis créatif</h2>
                <p class="color-gray">L’aspect créatif est très important dans ce métier, et encore plus pour moi. J'exprime cette créativité a travers les nombreux projets web que j'ai pu réalisé, tout en me tenant a jour sur les nouvelles tendances actuelles.</p>
            </div>
        </div>

        <div class="spacebar spacebar-md center"></div>

        <div class="row pres-element mt-5 mb-5" data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
            <div class="col-md-6 offset-md-0 col-10 offset-1 heading align-self-center">
                <h2 class="title-sm bold color-dark margin-bot margin-left">Développeur Front-End</h2>
                <p class="color-gray">Développement coté client, ce que voit les utilisateurs en arrivant sur un site. Je maitrise les langages cités ci-contre. J'optimise mon code pour que les pages soient le plus rapide possible et qu'elles soient valide W3C.</p>
            </div>
            <div class="col-md-6 offset-md-0 col-10 offset-1 illustration text-align-right mt-sm-3"> <img src="<?= $router -> rootUrl() ;?>public/images/illustrations/frond-end_illustration.svg" alt="Illustration" width="80%"> </div>
        </div>

        <div class="row pres-element mt-5" data-aos="fade-left" data-aos-duration="700" data-aos-once="true">
            <div class="col-md-6 offset-md-0 col-10 offset-1 illustration text-align-left order-md-1 order-2 mt-sm-3"> <img src="<?= $router -> rootUrl() ;?>public/images/illustrations/back-end_illustration.svg" alt="Illustration" width="80%"> </div>
            <div class="col-md-6 offset-md-0 col-10 offset-1 heading align-self-center order-md-2 order-1">
                <h2 class="title-sm bold color-dark margin-bot margin-left">Développeur Back-End</h2>
                <p class="color-gray">Je développe les systèmes et interfaces pour gérer le coté client en utilisant PHP et les bases de données.</p>
            </div>
        </div>
    </div>
</section>



<section id="new_project_comp" class="mt-5 mb-5">
    <div class="container_fluid text-align-center bg-dark" id="new_project_title">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-8 offset-2 text-align-center mt-5 mb-5"> 
                <img src="<?= $router -> rootUrl() ;?>public/images/icons/last_project_icon.svg.png" alt="Icon" width="64px"> 
                <h3 class="title-md bold color-light margin-bot">Mon dernier projet</h3>
                <p class="text-sm color-gray margin-top">Découvrez le dernier projet que j'ai publié sur ce site, cliquez ci dessous pour y accéder</p>
            </div>
        </div>
    </div>
    <div class="container mt-5" id="new_project">
        <div class="row">
            <div class="col-lg-6 offset-lg-0 col-10 offset-0 illustration text-align-right mb-lg-0 mb-3"> <img src="<?= $router -> rootUrl() ;?>public/images/projets/R5H37x/preview/banners/banner.png" alt="" width="80%"> </div>
            <div class="col-lg-6 offset-lg-0 col-10 offset-1">
                <h3 class="title-md bold text-align-center color-dark">Improove - Gestion de projet</h3>
                <p class="color-gray mt-3">Improove est une plateforme complète dédié a la gestion de projet. L'utilisateur peut créer son projet et y inviter des membres en les répartissant par la suite en équipe. Improove dispose de différents outils. Comme la gestion de tâches en définissant des deadline, en assignant des membres, ou en chronométrant le temps de travail. Mais aussi des tchats pour communiquer, un endroit pour stocker et partager les documents ou bien le bug-tracker. D'autres outils sont disponibles, à vous de les découvrir !</p>
                <div class="margin-top-lg"> <a href="<?= $router -> rootUrl() ;?>improove" title="Aller au projet" class="btn primary-btn">Aller au projet</a> </div>
            </div>
        </div>
    </div>
</section>



<?php require ('src/View/components/short-contact.php') ;?>
<?php require ('src/View/components/footer.php') ;?>


<script> AOS.init(); </script>