<?php

    // - è definita una classe ‘Movie’
    class Movie{
        // => all'interno della classe sono dichiarate delle variabili d'istanza
        public $name;
        public $year;
        public $genere;


        // => all'interno della classe è definito un costruttore
        function __construct($name, $year, $genere) {
            $this->name = $name;
            $this->year = $year;
            $this->genere = $genere;
        }
    },
    

    
    
?>