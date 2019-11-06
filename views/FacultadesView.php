<?php

//Llama a la libreria de Smarty
require_once ('./libs/Smarty.class.php');

class FacultadesView{
    //Variables
    private $smarty;

    //Constructor
    public function __construct($facultades){
        //Inicializa smarty
        $this->smarty = new Smarty();
        $this->smarty->assign('URL', URL_OLIMPIADAS); 
        $this->smarty->assign('titulo', 'Home');
        //Declaro una variable con el valor de la variable pasada por parametro
        $this->smarty->assign('facultades', $facultades);
    }

    //Mostrar Home
    public function displayIndex(){
        $this->smarty->display('../templates/verIndex.tpl');
    }

    //Mostrar facultades
    public function displayFacultades(){
        $this->smarty->display('../templates/verFacultades.tpl');
    }

    //Mostrar una facultad
    public function displayFacultad($facultadNombre){
        $this->smarty->display('../templates/verFacultades.tpl');
    }
}