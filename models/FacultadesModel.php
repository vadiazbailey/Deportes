<?php

class FacultadesModel{
    //Variables
    private $db;

    //Constructor-> le declaro con que base de datos se va a comunicar
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_olimpiadas;charset=utf8','root','');
    }

    //Obtener todas las facultades
    public function getFacultades(){
        $query = $this->db->prepare('SELECT * FROM facultad');
        $ok= $query-> execute();
        if(!$ok){
            var_dump($query->errorInfo());
            die();
        }
        $facultades = $query->fetchAll(PDO::FETCH_OBJ);
        return $facultades;
    }
    
    //Obtener una facultad
    public function getFacultad($facultadNombre){
        
    }
}