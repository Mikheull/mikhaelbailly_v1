<div class="container wrapper_content" id="project_share" data-aos="fade-right" data-aos-duration="700">
    <div class="row">

        <div class="col-12"> <h2 class="title-lg bold color-dark title-lg-shadow">Partager</h2> </div>
        
        <div class="col-md-10 col-12 margin-top margin-bot flex">
            <ul class="flex">
                <li> <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=urlencode($obj['informations'][0]['shared_url'])?>&title=MikhaelBailly&source=MikhaelBailly" target="blank" class="btn btn btn-linkedin margin-right"><i class="fab fa-linkedin"></i> Linkedin</a> </li>
                <li> <a href="https://twitter.com/intent/tweet?url=<?=urlencode($obj['informations'][0]['shared_url'])?>" target="blank" class="btn btn btn-twitter margin-right"><i class="fab fa-twitter"></i> Twitter</a> </li>
                <li> <a href="https://www.facebook.com/sharer.php?u=<?=urlencode($obj['informations'][0]['shared_url'])?>" target="blank" class="btn btn btn-facebook margin-right"><i class="fab fa-facebook-square"></i> Facebook</a> </li>
                <li> <a href="http://pinterest.com/pin/create/link/?url=<?=urlencode($obj['informations'][0]['shared_url'])?>" target="blank" class="btn btn btn-pinterest margin-right"><i class="fab fa-pinterest"></i> Pinterest</a> </li>
                <li> <a href="mailto:?subject=Partage de projet sur mikhaelbailly.fr&body=<?= $obj['informations'][0]['shared_url'] ;?>" target="blank" class="btn btn btn-mail"><i class="far fa-envelope"></i> Mail</a> </li>
            </ul>
        </div>

    </div>
</div>