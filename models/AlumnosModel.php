<?php

class AlumnosModel{
    //Variables
    private $db;

    //Constructor-> le declaro con que base de datos se va a comunicar
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_olimpiadas;charset=utf8','root','');
    }
}