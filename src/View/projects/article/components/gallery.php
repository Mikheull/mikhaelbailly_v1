<div class="container wrapper_content" id="project_design" data-aos="fade-right" data-aos-duration="700">
    <div class="row">

        <div class="col-12"> <h2 class="title-lg bold color-dark title-lg-shadow">Gallerie</h2> </div>
        
        <div class="col-12 margin-top margin-bot">
            <div class="container">
                <div class="row">
                    <?php
                        $nb = 1;
                        foreach($obj['gallery'] as $value) {
                        ?> 
                            <div class="col-10">
                                <div class="margin-top-lg text-align-center">
                                    <img src="public/images/projets/<?= $ref ?>/gallery/<?= $value['min_name'] ?>" alt="<?= $value['alt'] ?>" width="100%" class="link">
                                    <small class="color-gray text-xs"> <?= $value['alt'] ?> </small>
                                </div>
                            </div>
                        <?php
                        $nb ++;
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>