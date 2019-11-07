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

    

}