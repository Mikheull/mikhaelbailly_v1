<?php


/**
 * Script de router
 * Il gère les méthodes relative a la class router
 * 
 */

/******************************************************************************/


$router = new router($db);


require_once ('config/routes.php');


if($ServerHost == 'localhost' ){
    if(file_exists('config/dev/routes.php')){
        require_once ('config/dev/routes.php');
    }
}else{
    if(file_exists('config/prod/routes.php')){
        require_once ('config/prod/routes.php');
    }
}

foreach($project -> getProjects() as $project){
    $router -> addRoute( 
        [ 
            'route' => $project['uri'], 
            'dir_path' => 'src/View/projects/article/'
        ]
    );

    if($project['alias']){
        if(strpos($project['alias'], ',') !== false) {
            $alias = explode(',', $project['alias']);
            foreach($alias as $al){
                $router -> addRoute( 
                    [ 
                        'route' => $project['uri'],
                        'alias' => $al,
                        'dir_path' => 'src/View/projects/article/'
                    ]
                );
            }
        }else {
            $router -> addRoute( 
                [ 
                    'route' => $project['uri'],
                    'alias' => $project['alias'],
                    'dir_path' => 'src/View/projects/article/'
                ]
            );
        }
    }
}





if(isset($_GET['query'])){

    if($router -> rootExist($_GET['query']) == true){
        
        $exec_router = $router -> getRouteData($_GET['query']);
        $require_url = $exec_router['file_path'];
        $require_route = $exec_router['route'];
        $rendering_html = $exec_router['rendering_html'];
        
        if($exec_router['success'] == true && file_exists($exec_router['file_path']) && file_exists($exec_router['config_path'])){
            require ('src/View/index.php');
        }else{
            die( 'la page demandée est configurée mais son fichier source n\'existe pas ('.$exec_router['file_path'].')' );
        }

    }else{
        $_GET['query'] = 'not-found';
        $exec_router['file_path'] = 'src/View/errors/404/index.php';
        $exec_router['config_path'] = 'src/View/errors/404/config.json';
        $require_url = $exec_router['file_path'];
        $require_route = 'not-found';
        $rendering_html = true;
        require ('src/View/index.php');
    }

}else{
    $_GET['query'] = 'home';
    $exec_router['file_path'] = 'src/View/home/index.php';
    $exec_router['config_path'] = 'src/View/home/config.json';
    $require_url = $exec_router['file_path'];
    $require_route = 'home';
    $rendering_html = true;
    require ('src/View/index.php');
}
