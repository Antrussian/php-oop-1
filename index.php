<?php
/*un file index.php in cui:
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
include_once __DIR__ . '/Models/Movie.php';
include_once __DIR__ . '/Models/Category.php';
?>

<?php

$commedia = new Category('Commedia');
$azione = new Category('Azione');


$firstMovie = new Movie('Tre uominie una gamba','Aldo, Giovanni e Giacomo',$commedia,'90');
$secondMovie = new Movie('Casino Royale','Daniel Craig',$azione,120);


$list = [$firstMovie, $secondMovie];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
</head>
<body>
    <h1>Movie List</h1>
    <ul>
        <?php foreach ($list as $movie): ?>
            <li>
                Title: <?php echo $movie->title; ?><br>
                Actors: <?php echo $movie->actors; ?><br>
                Category: <?php echo $movie->category->name; ?><br>
                Duration: <?php echo $movie->duration; ?> minutes<br>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>



