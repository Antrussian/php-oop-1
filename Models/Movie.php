<?php
class Movie{
    public $title;
    public $actors;
    public $category;
    public $duration;




public function __construct($_title,$_actors,$_category,$_duration,){
    $this->title = $_title;
    $this->actors = $_actors;
    $this->category = $_category;
    $this->duration = $_duration;

}


//RICORDA:"metodo" tipico di questa classe qua, a questo oggetto qua, se lo metto fuori è una funzione
    public function getTitle(){
        return $this->title;
    }





}

?>