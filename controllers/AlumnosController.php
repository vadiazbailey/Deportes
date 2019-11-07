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
        $this->model = new FacultadesModel();
        //paso la function al constructor por que siempre se van a mostrar las facultades
        $this->view = new AlumnosView();
    }

    //Funcion que me muestra el home
    public function showIndex(){
        $alumnos = $this->model->getAlumnos();//obtengo los generos desde el model
        $facultades = $this ->modelFacultad -> getFacultades();
        $this ->view -> displayVisitante($genders, $series);
        
    }

    //Funcion que muestra todos los alumnos
    public function getAlumnos(){
    $alumnos=$this->model->getAlumnos();
    $this->view->displayAlumnos($alumnos);
    }
}