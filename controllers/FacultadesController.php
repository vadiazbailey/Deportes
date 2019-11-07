<?php

require_once ('./models/FacultadesModel.php');
require_once ('./views/FacultadesView.php');

class FacultadesController{
    //Variables
    private $model;
    private $view;

    //Constructor
    public function __construct(){
        $this->model = new FacultadesModel();
        //Creamos esta variable en el contructor porque se reitera en varias funciones.
        $facultades= $this->model->getFacultades();
        $this->view = new FacultadesView($facultades);
    }

    //Función que muestra el Home
    public function showIndex(){
        $this->view->displayIndex();
    }

    //Función que muestra todas las facultades
    public function getFacultades(){
        $this->view->displayFacultades();
    }

    //Función que muestra una facultad
    public function getFacultad($facultadNombre){
        $facultad = $this->model->getFacultad($facultadNombre);
        $this->view->displayFacultad($facultad);
    }
    //Función que agrega una facultad
    public function addFacultad(){
        if(isset($_POST['facultad'])&&($_POST['sede'])&&($_POST['historia'])){
            $facultad=($_POST['facultad']);
            $sede=($_POST['sede']);
            $historia=($_POST['historia']);
        }
        $this->model->addFacultad($facultad,$sede,$historia);
        header ("Location: " . URL_OLIMPIADAS);
    }
    //Función que edita una facultad
    public function editFacultad($id_facultad){
        $formulario=$this->view->displayForm($id_facultad);

        if(isset($_POST['facultad'])&&($_POST['sede'])&&($_POST['historia'])){
         $facultad=($_POST['facultad']);
         $sede=($_POST['sede']);
         $historia=($_POST['historia']);
        }

         $this->model->editFacultad($id_facultad);
         header ("Location: " . URL_OLIMPIADAS);
    }
    

   //Función que muestra un formulario para editar
    // public function displayForm($id_facultad){
    //     $id=$this->model->displayForm($id_facultad);
    //     $this->view->displayForm($id_facultad);
    // }

    //Función que elimina una facultad
    public function deleteFacultad($id_facultad){
     $this->model->deleteFacultad($id_facultad);
     header ("Location: " . URL_OLIMPIADAS);
    }
}
