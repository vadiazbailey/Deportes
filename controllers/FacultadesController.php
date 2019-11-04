<?php

require_once ('./models/FacultadesModel.php');
require_once ('./views/FacultadesView.php');

class FacultadesController{
    //variables
    private $model;
    private $view;

    //Constructor
    public function __construct(){
        $this->model = new FacultadesModel();
        //Creamos esta variable en el contructor porque se reitera en varias funciones.
        $facultades= $this->model->getFacultades();
        $this->view = new FacultadesView($facultades);
    }

    //Funcion para ver todas las facultades
    public function getFacultades(){
        $this->view->displayFacultades();
    }
}