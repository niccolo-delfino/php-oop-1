<?php

  class Movie{

    public $titolo;
    public $regista;
    public $protagonista;
    public $genere;
    public $anno;
    public $durata;
    public $voto;

    public function __construct($_titolo, $_anno)
   {
       $this->titolo = $_titolo;
       $this->anno = $_anno;
   }

   public function setTipo($_durata)
   {
     $this->durata = $_durata;

       if($_durata <= 30) {
           $this->tipo = 'Cortometraggio';
       } else {
         $this->tipo = 'Lungometraggio';
       }
   }

   public function getTipo()
   {
       return $this->tipo;
   }

    }

  $film = new Movie('Jurassic Park', '1993');
  $film->regista = 'Spielberg';
  $film->protagonista = 'Sam Neill';
  $film->genere = 'Avventura/Fantascienza';
  $film->setTipo(127);
  $film->voto = 9;
  // echo $film->titolo;
  // echo $film->anno;
  // echo $film->regista;
  // echo $film->protagonista;
  // echo $film->genere;
  // echo $film->durata;
  // echo $film->tipo;
  // echo $film->voto;

  $film2 = new Movie('Indiana Jones - I predatori dell\'arca perduta', '1981');
  $film2->regista = 'Spielberg & Lucas';
  $film2->protagonista = 'Harrison Ford';
  $film2->genere = 'Avventura/Azione';
  $film2->setTipo(111);
  $film2->voto = 10;
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
   <h2><?php echo $film->titolo; ?></h2>
   <ul>
     <li><strong>Anno:</strong> <?php echo $film->anno; ?></li>
     <li><strong>Regista:</strong> <?php echo $film->regista; ?></li>
     <li><strong>Protagonista:</strong> <?php echo $film->protagonista; ?></li>
     <li><strong>Genere:</strong> <?php echo $film->genere; ?></li>
     <li><strong>Durata:</strong> <?php echo $film->durata; ?></li>
     <li><strong>Tipo:</strong> <?php echo $film->tipo; ?></li>
     <li><strong>Voto:</strong> <?php echo $film->voto; ?></li>
   </ul>
   <h2><?php echo $film2->titolo; ?></h2>
   <ul>
     <li><strong>Anno:</strong> <?php echo $film2->anno; ?></li>
     <li><strong>Regista:</strong> <?php echo $film2->regista; ?></li>
     <li><strong>Protagonista:</strong> <?php echo $film2->protagonista; ?></li>
     <li><strong>Genere:</strong> <?php echo $film2->genere; ?></li>
     <li><strong>Durata:</strong> <?php echo $film2->durata; ?></li>
     <li><strong>Tipo:</strong> <?php echo $film2->tipo; ?></li>
     <li><strong>Voto:</strong> <?php echo $film2->voto; ?></li>
   </ul>


 </body>
 </html>
