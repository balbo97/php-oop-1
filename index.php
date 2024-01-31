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

        // => all'interno della classe è definito almeno un metodo
        public function setNewest($year){
            if($year >= 2023){
                $this->visibility = true;
            }
        }

        public function getNewest(){
            return $this->visibility;
        }
    }

    // - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

    $movie_1 = new Movie('The wolf of Wall Street', 2013, 'biografico');

    echo '<div>' . $movie_1->name . ' è un film di genere ' . $movie_1->genere . ' uscito nel ' . $movie_1->year . '.</div>';

    $movie_2 = new Movie('Inception', 2010, 'fantascentifico');

    echo '<div>' . $movie_2->name . ' è un film di genere ' . $movie_2->genere . ' uscito nel ' . $movie_2->year . '.</div>';

    

    
    
?>