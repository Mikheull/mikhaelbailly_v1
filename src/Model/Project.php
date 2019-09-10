<?php

class Project extends db_connect {

    function __construct($connect){
        parent::__construct($connect);
    }

    /**
     * Cette fonction va retourner la liste brut de tous les projects
     * 
     * @return array
     */
    function getProjects(){
        $request = $this -> _db -> query("SELECT * FROM `projects` ORDER BY `ID` desc ");
        return $request -> fetchAll();
    }


    /**
     * Cette fonction va retourner une information d'un projet donné
     * 
     * @param 1 = la reference
     * @param 2 = l'information a récupérer
     * @return array
     */
    function getProject($ref, $inf){
        $request = $this -> _db -> query("SELECT * FROM `projects` WHERE `reference` = '$ref' ");
        foreach($request -> fetchAll() as $r){
            return $r[$inf];
        }
    }


    /**
     * Transforme un nom de projet en réference sql
     * 
     * @access public
     * @author Mikhaël Bailly
     * @param string $name Nom de la route
     * @return var
     */
    function transformNameToRef($name){
        $request = $this -> _db -> query("SELECT * FROM `projects` WHERE `uri` = '$name' ");
        foreach($request -> fetchAll() as $r){
            return $r['reference'];
        }
    }


    /**
     * Transforme un nom de projet en ID sql
     * 
     * @access public
     * @author Mikhaël Bailly
     * @param string $name Nom de la route
     * @return var
     */
    function transformNameToID($name){
        $request = $this -> _db -> query("SELECT * FROM `projects` WHERE `uri` = '$name' ");
        foreach($request -> fetchAll() as $r){
            return $r['ID'];
        }
    }


    /**
     * Récupère le projet précédent d'un projet
     * 
     * @access public
     * @author Mikhaël Bailly
     * @param string $id id du projet
     * @return var
     */
    function getPrevProject($id){
        $request = $this -> _db -> query("SELECT * FROM `projects` WHERE ID < $id ORDER BY ID DESC LIMIT 1; ");
        return $request -> fetch();
    }


    /**
     * Récupère le projet suivant d'un projet
     * 
     * @access public
     * @author Mikhaël Bailly
     * @param string $id id du projet
     * @return var
     */
    function getNextProject($id){
        $request = $this -> _db -> query("SELECT * FROM `projects` WHERE ID > $id ORDER BY ID LIMIT 1; ");
        return $request -> fetch();
    }


}