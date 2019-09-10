<div class="container wrapper_content" id="project_description" data-aos="fade-right" data-aos-duration="700">
    <div class="row">

        <div class="col-12"> <h2 class="title-lg bold color-dark title-lg-shadow">Description</h2> </div>
        
        <div class="col-md-10 col-12 margin-top margin-bot">
            <?php
                if($obj['informations'][0]['description'][0]['enable'] == true){
                    ?><p><?= $obj['informations'][0]['description'][0]['text'] ?></p><?php
                }
            ?>
        </div>

        <div class="col-md-6 offset-md-3 col-8 offset-2 margin-top-lg margin-bot information_wrapper light-border">
            <h4 class="title-xs color-primary">Informations sur le projet</h4>
            <div class="margin-top">
                <?php
                    foreach($obj['informations'][0]['card'] as $value) {
                        ?> <p> <span class="bold margin-right"><?= $value['title'] ;?> :</span> <?= $value['data'] ;?></p> <?php
                    }
                ?>
            </div>
        </div>

    </div>
</div>