<?php
require_once ('controllers/FacultadesController.php');
require_once ('controllers/AlumnosController.php');
require_once ('controllers/UserController.php');

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
define("URL_OLIMPIADAS", BASE_URL);

//define("SIGNIN", BASE_URL . 'signIn');

$action = $_GET['action'];//tomo el valor del action (accion que haga el usuario)
$facultadesController = new FacultadesController();
$alumnosController=new AlumnosController();
$userController = new UserController();

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
                $userController->displayLogIn();
        }
        elseif($url[0]=="registrarse"){
            $userController->displayRegistro();
            die();
        }
        elseif($url[0]=="registrar"){
            $userController->registerUser();
            die();
        }
        elseif($url[0]=="registrar"){
            $userController->registerUser();
            die();
        }
        elseif($url[0]=="identificar"){
         $userController->logIn();
         die();
        }
        elseif($url[0]=="logout"){
            $userController->logOut();
            die();
        }
        elseif($url[0]=="editar"){
         $facultadesController->editFacultad();
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
        elseif($url[0]=="verMas"){
            $facultadesController->verMas($url[1]);
        }
        // elseif($url[0]=="insertarAlumnos"){
        //     $alumnosController->addAlumno();
        // }
    }

}