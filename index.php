<?php
/*
Ciao ragazze e ciao ragazzi,
esercizio di oggi: PHP OOP 1
nome repo: php-oop-1
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ :
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà (vietato usare var_dump)
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
*/
?>
<?php

class Movie{
    public $title;
    public $actors;
    public $categories;
    public $duration;

    // Costruttore della classe Movie
    public function __construct($title, $actors, $categories, $duration) {
        $this->title = $title;
        $this->actors = $actors;
        $this->categories = $categories;
        $this->duration = $duration;
    }

    // Metodo per ottenere il titolo del film
    public function getTitle(){
        return $this->title;
    }
}

// Istanziazione dei due film
$firstMovie = new Movie('Tre uomini e una gamba', 'Aldo, Giovanni e Giacomo', 'Commedia', 90);
$secondMovie = new Movie('Casino Royale', 'Daniel Craig', 'Azione', 120);

// Stampa dei titoli dei film
echo $firstMovie->getTitle() . "<br>";
echo $secondMovie->getTitle() . "<br>";

?>





