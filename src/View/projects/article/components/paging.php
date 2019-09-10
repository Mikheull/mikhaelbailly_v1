<?php
    $prev = $project -> getPrevProject($id);
    $next = $project -> getNextProject($id);
?>

<div class="container wrapper_content">
    <div class="row flex justify-content-between">

        <?php
        if(!empty($prev)){
            ?>
            <a href="<?= $config -> rootUrl() . $prev['uri'] ?>" class="btn col-4 primary-border flex justify-content-between"> 
                <div class="color-lg-dark "><i class="fas fa-arrow-left"></i> Précédent</div>
                <div class="color-primary  sm-hide"> <?= $prev['project_name'] ?> </div>
            </a>
            <?php
        }
        if(!empty($next)){
            ?>
            <a href="<?= $config -> rootUrl() . $next['uri'] ?>" class="btn col-4 primary-border flex justify-content-between"> 
                <div class="color-primary  sm-hide"> <?= $next['project_name'] ?> </div>
                <div class="color-lg-dark ">Suivant <i class="fas fa-arrow-right"></i></div>
            </a>
            <?php
        }
        ?>
        

    </div>
</div>

