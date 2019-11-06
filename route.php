<?php
require_once ('controllers/FacultadesController.php');
require_once ('controllers/LoginController.php');

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
define("URL_OLIMPIADAS", BASE_URL);
//define("SIGNIN", BASE_URL . 'signIn');

$action = $_GET['action'];//tomo el valor del action (accion que haga el usuario)
$facultadesController = new FacultadesController();
// $adminController = new AdminController();
//$controllerLogin = new LoginController();
    
    if($action==''){//si action es nulo se muestra el index de las olimpiadas 
        $facultadesController -> showIndex();
    }
    else{
        if(isset($action)){
        //si el action está seteado
        $url = explode("/", $action);//divido con el explode un string en un array de strings
            if($url[0] == 'login'){
                
        }
        elseif($url[0]=="insertar"){
         $facultadesController->addFacultad();
         die();
        }
        elseif($url[0]=="editar"){
         $facultadesController->editFacultad();
         die();
        }
        elseif($url[0]=="eliminar"){
         $facultadesController->deleteFacultad();
         die();
        }
        }
    }
