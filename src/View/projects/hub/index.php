<?php require ('src/Controller/Project.php'); ?>


<section class="header bg-light">
    <?php require_once ('src/View/components/navbar-header-light.php') ;?>
</section>


<section id="project_hub" class="mt-5">

    <div class="container heading mb-5">
        <div class="row">
            <div class="col-12">
                <h2 class="title-md bold color-lg-dark">Mes projets</h2>
                <h3 class="title-xs color-gray">Découvrez mes créations, que ce soit des sites, des applications ou encore des designs.</h3>
            </div>
        </div>
    </div>


    <div class="container content">
        <div class="row">
            <ul class="col-12 navbar">
                <li> <a class="link dark-link fitler_buttons active" data-filter="all">Tout</a> </li>
                <li> <a class="link dark-link fitler_buttons" data-filter="site">Sites</a> </li>
                <li> <a class="link dark-link fitler_buttons" data-filter="app">Apps</a> </li>
                <li> <a class="link dark-link fitler_buttons" data-filter="design">Design</a> </li>
                <li> <a class="link dark-link fitler_buttons" data-filter="other">Autres</a> </li>
            </ul>
        </div>

        <div class="row">
            <?php
            foreach($project -> getProjects() as $project){
            ?>
                <a href="<?= $project['uri'] ?>" class="col-md-8 offset-md-0 col-10 offset-1 project-item light-border margin-bot" data-aos="fade-right" data-aos-duration="600" data-category="<?= $project['category'] ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-12 banner">
                                <img src="<?= $config -> rootUrl() .'public/images/projets/' . $project['reference'] ?>/banners/banner.jpg" alt="Bannière du projet <?= $project['project_name'] ;?>">
                            </div>
                            <div class="col-md-8 col-12 align-self-center text">
                                <h3 class="title-xs bold color-lg-dark"><?= $project['project_name'] ;?></h3>
                                <p class="title-xs color-gray"><?= $project['project_description'] ;?></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            }
            ?>
        </div>
    
    </div>
</section>


<?php require ('src/View/components/footer.php') ;?>


<script> AOS.init({ once: true }); </script>
