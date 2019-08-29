<?php

class Router extends db_connect {
    
    private $routes = [];
    private $alias = [];

    function __construct($connect){
        parent::__construct($connect);
    }



    /**
     * Ajouter une route
     *
     * @access public
     * @author Mikhaël Bailly
     * @param array $array tableau contenant les données de la nouvelle route
     */
    
    function addRoute($array = []){
        array_push($this->routes, $array);
    }

   /**
     * Ajouter plusieurs routes
     * 
     * @access public
     * @author Mikhaël Bailly
     * @param array $array tableau contenant un autre tableau avec les données des nouvelles routes
     */
    
    function addRoutes($array = []){
        foreach($array as $route){
            array_push($this->routes, $route);
        }
    }



    /**
     * Verification de la route
     * 
     * @access public
     * @author Mikhaël Bailly
     * @param string $route_name Nom de la route
     * @return boolean
     */
    
    function rootExist($route_name = ''){

        foreach($this->routes as $route){

            $_route = $route['route'];
            $_alias = isset($route['alias']) ? $route['alias'] : '';
            
            $_route = $this -> transformPlaceholder($_route);
            $_route = str_replace("/", "\/", "$_route");

            if(preg_match_all('/^'. $_route .'[\/]?$/', $route_name, $matches, PREG_SET_ORDER, 0) == true OR preg_match_all('/^'. $_alias .'[\/]?$/', $route_name, $matches, PREG_SET_ORDER, 0) == true){
                return true;
            }
        }

        return false;
    }



    /**
     * Transforme les placeholder
     * 
     * @access public
     * @author Mikhaël Bailly
     * @param string $route_name Nom de la route
     * @return var
     */

    function transformPlaceholder($_route = '') {
        $_route = str_replace("{{param}}", "([a-zA-Z0-9]{0,})", "$_route");

        return $_route;
    }



    /**
     * Récupérer les données d'une route
     *
     * @access public
     * @author Mikhaël Bailly
     * @param string $route_name Nom de la route
     * @return array
     */

    function getRouteData($route_name = ''){

        if($this -> rootExist($route_name) OR $this -> rootExist($route_name.'/')){
            foreach($this->routes as $route){

                $_route = $route['route'];
                $_alias = isset($route['alias']) ? $route['alias'] : '';
                
                $_route = $this -> transformPlaceholder($_route);
                $_route = str_replace("/", "\/", "$_route");
                $_alias = $this -> transformPlaceholder($_alias);
                $_alias = str_replace("/", "\/", "$_alias");
                $rendering_html = isset($route['rendering_html']) ? $route['rendering_html'] : true;
    
                if(preg_match_all('/^'. $_route .'[\/]?$/', $route_name, $matches, PREG_SET_ORDER, 0) == true OR preg_match_all('/^'. $_alias .'[\/]?$/', $route_name, $matches, PREG_SET_ORDER, 0) == true){
                    return ([
                        'success' => true,
                        'route' => $_route, 
                        'file_path' => $route['dir_path'].'index.php',
                        'config_path' => $route['dir_path'].'config.json',
                        'alias' => $_alias,
                        'rendering_html' => $rendering_html
                    ]);
                }
            }
            
        }else{
            return (['success' => false, 'options' => ['content' => 'La route n existe pas !'] ]);
        }
        
    }



    /**
     * Récupérer un paramètre de la route donnée
     *
     * @access public
     * @author Mikhaël Bailly
     * @param string $position Position du paramètre voulu
     * @return array | text
     */

    function getRouteParam($position = 'all'){
        $params = explode( '/', $_SERVER['QUERY_STRING']);
        $params[0] = str_replace("query=", '', $params[0]);
        
        return ($position == 'all' ? $params : $params[$position]);
    }


    /**
     * Obtenir un lien depuis la racine du site
     * 
     * @access public
     * @author Mikhaël Bailly
     * @return string
     */

    function rootUrl(){
        $counter = count(explode( '/', $_SERVER['QUERY_STRING']));
        $correctSlug = "";
        if($counter !== 0){
            for($i = 1;$i < $counter; $i ++){
                $correctSlug .= "../"; 
            }
        }
        return $correctSlug; 
    }

}
