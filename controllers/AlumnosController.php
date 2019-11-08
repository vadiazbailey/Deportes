<?php
require_once ('./models/AlumnosModel.php');
require_once ('./models/FacultadesModel.php');
require_once ('./views/AlumnosView.php');


class AlumnosController{
    //Variables
    private $model;
    private $modelFacultad;
    private $view;

    //Constructor
    public function __construct(){
        $this->model = new AlumnosModel();
        $this->modelFacultad = new FacultadesModel();
        //paso la function al constructor por que siempre se van a mostrar las facultades
        $this->view = new AlumnosView();
    }

    //Funcion que me muestra el home
    public function showIndex(){
        $alumnos = $this->model->getAlumnos();//obtengo los alumnos desde el model
        $facultades = $this ->modelFacultad -> getFacultades();//ver si es getFacultades
        $this ->view -> displayListaAlumnos($alumnos, $facultades);
        
    }

    //Funcion que muestra todos los alumnos
    public function getAlumnos(){
    $alumnos=$this->model->getAlumnos();
    $facultades = $this ->modelFacultad -> getFacultades();
    $this->view->displayAlumnos($alumnos, $facultades);
    }

    //Función que agrega al alumno
    public function addAlumno(){

        if(isset($_POST['nombre'])&&($_POST['apellido'])&&($_POST['DNI'])&&($_POST['email'])&&($_POST['celular'])&&($_POST['facultad'])){
            $nombre=($_POST['nombre']);
            $apellido=($_POST['apellido']);
            $DNI=($_POST['DNI']);
            $email=($_POST['email']);
            $celular=($_POST['celular']);
            $facultad=($_POST['facultad']);

        }      
        $this->model->addAlumno($nombre,$apellido,$DNI,$email,$celular, $facultad);
        header("Location: " . ALUMNOS);
    }
    //Función que elimina un alumno
    public function deleteAlumno($id_alumno){
        $this->userController->checklogin();
        $this->model->deleteAlumno($id_alumno);

        header ("Location: " . ALUMNOS);
    }
   
    public function editFacultad(){
        if(isset($_POST['nombre'])&&($_POST['apellido'])&&($_POST['DNI'])&&($_POST['email'])&&($_POST['celular'])){

            $id_facultad = ($_POST['id']);
            $facultad=($_POST['facultad']);
            $sede=($_POST['sede']);
            $historia=($_POST['historia']);
        }

         $this->model->editFacultad($id_facultad, $facultad, $sede, $historia);
         header ("Location: " . URL_OLIMPIADAS);
    }

}