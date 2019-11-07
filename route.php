<?php
require_once ('controllers/FacultadesController.php');
require_once ('controllers/AlumnosController.php');
require_once ('controllers/LoginController.php');

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
define("URL_OLIMPIADAS", BASE_URL);

//define("SIGNIN", BASE_URL . 'signIn');

$action = $_GET['action'];//tomo el valor del action (accion que haga el usuario)
$facultadesController = new FacultadesController();
$alumnosController=new AlumnosController();

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
         $facultadesController->editFacultad($url[1]);
         die();
        } 
        //Llama a una funcion que muestre un formulario para editar
        elseif($url[0]=="formulario"){
            $facultadesController->displayForm($url[1]);
            die();
           }        
        elseif($url[0]=="eliminar"){
         $facultadesController->deleteFacultad($url[1]);
         die();
        }
        elseif($url[0]=="Arte"){
            $controller= getFacultad($url[1]);
        }
        //----------------------ALUMNOS---------------------------------
        elseif($url[0]=="alumnos"){
            $alumnosController->getAlumnos();
        }
        // elseif($url[0]=="insertarAlumnos"){
        //     $alumnosController->addAlumno();
        // }
    }

}