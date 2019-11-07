<?php

class AlumnosModel{
    //Variables
    private $db;

    //Constructor-> le declaro con que base de datos se va a comunicar
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_olimpiadas;charset=utf8','root','');
    }

    //Obtiene el listado de alumnos
    public function getAlumnos(){
        $query= $this->db->prepare('SELECT * FROM alumno');
        $query->execute();
        $alumnos = $query->fetchAll(PDO::FETCH_OBJ);
        return $alumnos;
    }
    
}