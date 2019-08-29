<?php

class Config extends Router {

    /**
     * Récupérer les metas d'une page
     *
     * @access public
     * @author Mikhaël Bailly
     * @param string $config_file = le chemin d'accès de la config
     */

    function getConfigMeta($config_file = ''){
        $content = file_get_contents($config_file);
        $obj = json_decode($content, true);

        if(isset($obj['use_generic_meta']) AND $obj['use_generic_meta'] == true){
            echo file_get_contents('src/View/components/generic_meta.php');
        }else{
            if(isset($obj['meta'])){
                foreach($obj['meta'] as $ob){ 
                    echo $ob;
                }
            }else{
                echo file_get_contents('src/View/components/generic_meta.php');
            }
        }
    }



    /**
     * Récupérer les librairies d'une page
     * 
     * Récupérer les librairies d'un fichier config
     *
     * @access public
     * @author Mikhaël Bailly
     * @param string $config_file = le chemin d'accès de la config
     * @param string $lib = la librairie
     */

    function getConfigLib($config_file = '', $lib = ''){
        $content = file_get_contents($config_file);
        $obj = json_decode($content, true);

        if(isset($obj['libs'])){
            return in_array($lib, $obj['libs']) ? true : false;
        }
    }



    /**
     * Récupérer les styles d'une page
     * 
     * Récupérer les styles d'un fichier config
     *
     * @access public
     * @author Mikhaël Bailly
     * @param string $config_file = le chemin d'accès de la config
     */

    function getConfigCss($config_file = ''){
        $content = file_get_contents($config_file);
        $obj = json_decode($content, true);

        if(isset($obj['css'])){
            foreach($obj['css'] as $ob){
                echo '<link rel="stylesheet" type="text/css" media="screen" href="'. $this -> rootUrl() . 'public/css/' . $ob .'">';
            }
        }
        if(isset($obj['online_css'])){
            foreach($obj['online_css'] as $ob){
                echo '<link rel="stylesheet" type="text/css" media="screen" href="'. $ob .'">';
            }
        }
    }



    /**
     * Récupérer les scripts d'une page
     * 
     * Récupérer les scripts d'un fichier config
     *
     * @access public
     * @author Mikhaël Bailly
     * @param string $config_file = le chemin d'accès de la config
     */

    function getConfigScript($config_file = ''){
        $content = file_get_contents($config_file);
        $obj = json_decode($content, true);

        if(isset($obj['js'])){
            foreach($obj['js'] as $ob){
                echo '<script type="text/javascript" src="'. $this -> rootUrl() .'public/js/'. $ob .'"></script>';
            }
        }
        if(isset($obj['online_js'])){
            foreach($obj['online_js'] as $ob){
                echo '<script type="text/javascript" src="'. $ob .'"></script>';
            }
        }
    }


}