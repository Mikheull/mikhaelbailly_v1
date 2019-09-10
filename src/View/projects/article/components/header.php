<div class="container-fluid margin-bot-lg" id="project_header">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12 offset-0 text-align-center margin-top-lg" data-aos="fade-up" data-aos-duration="600">
                <img src="<?= $config -> rootUrl() ;?><?= $obj['identity'][0]['logo'][0]['path'] ?>" class="margin-bot margin-top-lg" alt="Logo du projet" width="64">    
                
                <h1 class="title-sm bold color-light"><?= $obj['identity'][0]['fullname'] ?></h1>
                <h2 class="text-xs color-gray">Création le <?= $obj['informations'][0]['release_date'] ?>. Dernière modification le <?= $obj['informations'][0]['last_edit_date'] ?></h2>
            </div>
        </div>

    </div>

    <div class="container sub-bar bg-light"> 
        <div class="row">
            <div class="col-md-9 col-12"><?= $obj['informations'][0]['navbar'][0]['description'] ?></div>
            <div class="col-md-3 col-12"> 
                <ul class="flex buttons">
                    <?php
                        if($obj['informations'][0]['navbar'][0]['external_url'] == true){
                            ?> <li class="margin-right"> <a href="<?= $obj['informations'][0]['navbar'][0]['external_url_path'] ?>" class="link primary-link" target="blank"> <i class="fas fa-link"></i> </a> </li> <?php
                        }
                    ?>
                </ul>    
            </div>
        </div>
    </div>
</div>