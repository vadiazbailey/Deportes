<?php
require_once ('controllers/FacultadesController.php');
require_once ('controllers/LoginController.php');

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
//define("SIGNIN", BASE_URL . 'signIn');
define("URL_OLIMPIADAS", BASE_URL . 'olimpiadas');

$action = $_GET['action'];//tomo el valor del action (accion que haga el usuario)
$facultadesController = new FacultadesController();
// $adminController = new AdminController();
$controllerLogin = new LoginController();
//hago un objeto de la class GenderController
// $serieController = new SerieController();
    
    if($action==''){//si action es nulo se muestra el index con la series
        $facultadesController -> showIndex();
        // $genderController -> getGenders();
    }
    elseif(isset($action)){
        //si el action está seteado
        $url = explode("/", $action);//divido con el explode un string en un array de strings
            if($url[0] == 'login'){
                $controllerLogin -> showLogin();
            }
            // if(isset($url[1]) && $url[1] == 'add'){
            //     $genderController -> addGender();
            //     die();
            // }
            // if(isset($url[1]) && $url[1] == 'edit'){
            //     $genderController -> editGender($url[2]);
            //     die();
            // }
            // if(isset($url[1]) && $url[1] == 'delete'){
            //     $genderController -> deleteGender($url[2]);
            //     die();
            // }
            // if(isset($url[1]) && $url[1] == 'addSerie'){
            //     $serieController -> addSerie();
            //     die();
            // }
            // if(isset($url[1]) && $url[1] == 'editSerie'){
            //     $serieController -> editSerie();
            //     die();
            // }
            // if(isset($url[1]) && $url[1] == 'deleteSerie'){
            //     $serieController -> deleteSerie();
            //     die();
            // }
            // if($url[0] == 'enterSession'){
            //     // $controllerLogin -> verifyUser();
            //     $genderController -> showIndexAdmin();
            // }
            // if($url[0] == 'verifyLog'){
            //     $controllerLogin -> verifyUser();
            //     $genderController -> showIndexAdmin();
            // }
            // if($url[0] == 'logout'){
            //     $controller = new LoginController();
            //     $controller -> logout();
            // }
            // // ------agregar/editar/borrar generos ----
            // if($url[0]=='insertGender'){
            //     $genderController->addGender();
            // }
            // if($url[0]=='serie'){
            //     $infoSerie = $serieController->getSerie($url[1]);
            //     $genderName = $genderController -> getGenderByID($infoSerie);
            //     $serieController->showSerie($infoSerie, $genderName);
            // }  
            // if($url[0]=='genero'){
            //     $gender = $genderController->getGender($url[1]);
            //     $serieController->getSeriesOfGender($gender);
            // }
    }