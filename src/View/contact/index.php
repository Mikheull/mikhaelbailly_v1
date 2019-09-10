<?php require ('src/Controller/Project.php'); ?>


<section class="header bg-light">
    <?php require_once ('src/View/components/navbar-header-light.php') ;?>
</section>


<section id="contact" class="mt-5">

    <div class="container heading mb-5">
        <div class="row">
            <div class="col-12">
                <h2 class="title-md bold color-lg-dark">Contactez moi</h2>
                <h3 class="title-xs color-gray">Vous avez une question ? <br>Remplissez le formulaire pour prendre contact avec moi.</h3>
            </div>
        </div>
    </div>


    <div class="container content">

        <div class="row margin-bot-lg">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="input_group">
                        <div class="input-field input-half-al">
                            <label for="email">Mail</label>
                            <input type="email" name="email" id="email" placeholder="john.doe@gmail.com" value="<?= (isset($_POST['email']) ? $_POST['email'] : '' ) ?>">
                        </div>

                        <div class="input-field input-half">
                            <label for="name">Nom complet</label>
                            <input type="text" name="name" id="name" placeholder="John Doe" value="<?= (isset($_POST['name']) ? $_POST['name'] : '' ) ?>">
                        </div>

                    </div>   

                    <div class="input_group"> 
                        <div class="input-field">
                            <label for="objet">Objet</label>
                            <input type="text" name="objet" id="objet" placeholder="Objet" value="<?= (isset($_POST['message']) ? $_POST['message'] : '' ) ?>">
                        </div>
                        <div class="input-field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" placeholder="Entrez votre message ici"><?= (isset($_POST['message']) ? $_POST['message'] : '' ) ?></textarea>
                        </div>
                    </div>               
                    <button class="btn" name="send_contact_button" disabled><span class="color-light">Formulaire indisponible</span></button>
                    <a class="btn primary-btn margin-left" href="mailto:mikhael.bailly1@orange.fr">M'envoyer un email</a>
                </form>
            </div>
        </div>
    
        <div class="spacebar spacebar-lg center"></div>

        <div class="row margin-top-lg margin-bot-lg">
            <div class="col-md-6 offset-md-3 col-12 text-align-center">
                <h3 class="title-md bold color-dark margin-bot">Mon profil vous intéresse ?</h3>
                <a class="btn light-btn-bordered" href="<?= $config -> rootUrl() ;?>dist/uploads/CV.pdf" download>Téléchargez mon CV</a>
            </div>
        </div>
    </div>
</section>


<?php require ('src/View/components/footer.php') ;?>