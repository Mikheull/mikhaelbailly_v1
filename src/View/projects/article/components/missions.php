<div class="container wrapper_content" id="project_missions" data-aos="fade-right" data-aos-duration="700">
    <div class="row">

        <div class="col-12"> <h2 class="title-lg bold color-dark title-lg-shadow">Missions</h2> </div>
        
        <div class="col-12 margin-top margin-bot">
            <div class="container">
                <div class="row listin-projet dragscroll">
                    <?php
                        $nb = 1;
                        foreach($obj['missions'] as $value) {
                        ?> 
                            <div class="col-10 list-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-1 align-self-center"> <div class="icon icon-round bg-primary color-light" style="line-height: 32px"><?= $nb ;?></div> </div>
                                        <div class="col-11">
                                            <h3 class="title-xs bold color-dark"><?= $value['title'] ;?></h3>
                                            <p class="text-sm color-lg-dark"><?= $value['data'] ;?></p>
                                        </div>
                                    </div>
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