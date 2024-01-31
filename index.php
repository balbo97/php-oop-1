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

    echo '<pre>';

    $movie_1 = new Movie('The Wolf of Wall Street', 2013, 'biografico');
    var_dump($movie_1);


    echo '<div>' . $movie_1->name . ' è un film di genere ' . $movie_1->genere . ' uscito nel ' . $movie_1->year . '.</div>';

    $movie_2 = new Movie('Inception', 2010, 'fantascentifico');
    var_dump($movie_2);

    echo '<div>' . $movie_2->name . ' è un film di genere ' . $movie_2->genere . ' uscito nel ' . $movie_2->year . '.</div>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<!-- Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies. -->
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie_1->name ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $movie_1->year ?></h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $movie_1->genere ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie_2->name ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $movie_2->year ?></h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $movie_2->genere ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>