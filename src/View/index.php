<?php
    if($rendering_html == false){
        require ($require_url);
    }else{
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
    
    <meta name="language" content="fr"/>
    <meta name="author" content="Mikhaël Bailly"/>
    <meta name="category" content="website, portfolio"/>
    <meta name="theme-color" content="#1971c2"/>
    <meta name="google-site-verification" content="Oheho3KHu68ezEkNqmK9clC-JJGnSyg5jWYgNzlGg20" />
    
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.mikhaelbailly.fr/<?= $_GET['query'] ;?>"/>
    <meta property="twitter:url" content="https://www.mikhaelbailly.fr/<?= $_GET['query'] ;?>"/>

    <?php $config -> getConfigMeta($exec_router['config_path']) ?>

    <link rel="stylesheet" type="text/css" media="screen" href="<?= $router -> rootUrl() ;?>public/css/core/rcH84cbzfsjxE8db9Hjm.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $router -> rootUrl() ;?>public/css/core/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $router -> rootUrl() ;?>public/css/core/main.min.css">
    <?php $config -> getConfigCss($exec_router['config_path']) ?>
    
    <link rel="shortcut icon" href="<?= $router -> rootUrl() ;?>dist/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Poppins:300,400,500" rel="stylesheet">

    <?php if($config -> getConfigLib($exec_router['config_path'],'fontawesome') == true){?> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> <?php } ;?>
    <?php if($config -> getConfigLib($exec_router['config_path'],'feather-icons') == true){?> <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script> <?php } ;?>
    <?php if($config -> getConfigLib($exec_router['config_path'],'jquery') == true){?> <script src="https://cdn.jsdelivr.net/npm/jquery@latest/dist/jquery.min.js"></script> <?php } ;?>
    <?php if($config -> getConfigLib($exec_router['config_path'],'popper') == true){?> <script src="https://unpkg.com/popper.js@1"></script> <?php } ;?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php if($config -> getConfigLib($exec_router['config_path'],'aos') == true){?> <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <?php } ;?>
    <?php if($config -> getConfigLib($exec_router['config_path'],'dragscroll') == true){?> <script src="https://cdn.jsdelivr.net/npm/dragscroll@0.0.8/dragscroll.min.js"></script> <?php } ;?>
    <?php if($config -> getConfigLib($exec_router['config_path'],'tippy') == true){?> <script src="https://unpkg.com/tippy.js@4"></script> <?php } ;?>
    <?php if($config -> getConfigLib($exec_router['config_path'],'recaptcha') == true){?> <script src="https://www.google.com/recaptcha/api.js" async defer></script> <?php } ;?>
    <?php if($config -> getConfigLib($exec_router['config_path'],'magnific-popup') == true){?> <script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.js"></script> <?php } ;?>

    
</head>

<body>

    <?php 
        require ($require_url);
    ?>

    <?php $config -> getConfigScript($exec_router['config_path']) ?>
</body>
</html>

<?php
    }
?>