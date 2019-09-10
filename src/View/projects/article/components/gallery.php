<div class="container wrapper_content" id="project_design" data-aos="fade-right" data-aos-duration="700">
    <div class="row">

        <div class="col-12"> <h2 class="title-lg bold color-dark title-lg-shadow">Gallerie</h2> </div>
        
        <div class="col-12 margin-top margin-bot">
            <div class="container margin-top">
                <?php
                    $banner_gallery = $obj['gallery'][0]['path'];
                ?>
                <a class="link" id="open-gallery"> <img src="<?= $banner_gallery ?>" alt="Image de bannière de la gallerie" height="500px"> </a>
            </div>
        </div>

    </div>
</div>



<div id="gallery_wrapper" class="hidden">
    Gallery here
</div>