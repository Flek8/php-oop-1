<?php

class Movie {

    public $titolo;
    public $regista;
    public $annoDiUscita;
    public $voto;
    public $cast;
    public $linguaOriginale;


    public function __construct($titolo, $regista) {
        $this->titolo = $titolo;
        $this->regista = $regista;
    }

    public function setVoto($voto) {
        if (is_numeric($voto) && $voto >= 0 && $voto <= 10) {
            $this->voto = $voto;
        } else {
            echo 'Valore del voto non valido!';
        }
    }
}


$titanic = new Movie('Titanic', 'James Cameron');
$titanic->annoDiUscita = 1998;
$titanic->cast =['Kate Winslet', 'Leonardo DiCaprio', 'Billy Zane'];
$titanic->linguaOriginale = 'Inglese';
$titanic->setVoto(8.8);

echo '<h2>Titolo del film: </h2> <strong>' . $titanic->titolo . '</strong> ( ' . $titanic->annoDiUscita . ' )';
echo '<h4>Regia: </h4>' . $titanic->regista;
echo '<h4>Cast: </h4>';
foreach ($titanic->cast as $attore) {
    echo $attore . '<br></br>';
}
echo '<h4>Valutazione: </h4>' . $titanic->voto;




$joker = new Movie('Joker', 'Todd Phillips');
$joker->annoDiUscita = 2019;
$joker->cast =['Joaquin Phoenix', 'Robert De Niro', 'Zazie Beetz'];
$joker->linguaOriginale = 'Inglese';
$joker->setVoto(7.5);

echo '<h2>Titolo del film: </h2> <strong>' . $joker->titolo . '</strong> ( ' . $joker->annoDiUscita . ' )';
echo '<h4>Regia: </h4>' . $joker->regista;
echo '<h4>Cast: </h4>';
foreach ($joker->cast as $attore) {
    echo $attore . '<br></br>';
}
echo '<h4>Valutazione: </h4>' . $joker->voto;




$pulpFiction = new Movie('Pulp Fiction', 'Quentin Tarantino');
$pulpFiction->annoDiUscita = 1994;
$pulpFiction->cast =['Uma Thurman', 'John Travolta', 'Samuel L. Jackson', 'Bruce Willis'];
$pulpFiction->linguaOriginale = 'Inglese';
$pulpFiction->setVoto(8.3);

echo '<h2>Titolo del film: </h2> <strong>' . $pulpFiction->titolo . '</strong> ( ' . $pulpFiction->annoDiUscita . ' )';
echo '<h4>Regia: </h4>' . $pulpFiction->regista;
echo '<h4>Cast: </h4>';
foreach ($pulpFiction->cast as $attore) {
    echo $attore . '<br></br>';
}
echo '<h4>Valutazione: </h4>' . $pulpFiction->voto;
