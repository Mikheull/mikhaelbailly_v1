<?php 
    require ('src/Controller/Project.php');

    $ref = $project -> transformNameToRef( $require_route ); 
    $id = $project -> transformNameToID( $require_route ); 

    $tpml = 'src/View/projects/article/templates/'. $ref .'.json';
    $content = file_get_contents($tpml);
    $obj = json_decode($content, true);
?>



<section class="header article bg-dark">
    <?php 
        require_once ('src/View/components/navbar-header.php') ;

        if(in_array('informations', $obj['components'])){ require_once ('src/View/projects/article/components/header.php') ; }    
    ?>
</section>


<section class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1 col-12 offset-0">
            <?php 
                if(in_array('informations', $obj['components'])){ require_once ('src/View/projects/article/components/description.php') ; }
                if(in_array('missions', $obj['components'])){ require_once ('src/View/projects/article/components/missions.php') ; }
                if(in_array('prototypes', $obj['components'])){ require_once ('src/View/projects/article/components/prototypes.php') ; }
                if(in_array('languages', $obj['components'])){ require_once ('src/View/projects/article/components/languages.php') ; }
                if(in_array('gallery', $obj['components'])){ require_once ('src/View/projects/article/components/gallery.php') ; }
            ?>

            <div class="spacebar spacebar-lg center"></div>
            <?php 
                require_once ('src/View/projects/article/components/sharing.php');
                require_once ('src/View/projects/article/components/paging.php');
            ?>
        </div>
    </div>
</section>


<?php require ('src/View/components/footer.php') ;?>


<script> AOS.init({ once: true }); </script>
