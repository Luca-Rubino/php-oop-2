<?php 
require_once __DIR__ . '/prodotti.php';

class cibo extends prodotti {
    private $peso;
    private $ingredienti;

    // costruttori
    public function __construct($nome, $prezzo, $categoria, $urlImg, $peso, $ingredienti,){
        parent::__construct($nome, $prezzo, $categoria, $urlImg, $peso, $ingredienti,);
        $this -> peso = $peso;
        $this -> ingredienti = $ingredienti;

    }

    // peso
    public function getPeso(){
        return $this -> peso;
    }

    public function setPeso($peso){
        $this -> peso = $peso;
    }

    // ingredienti
    public function getIngredienti(){
        return $this -> ingredienti;
    }

    public function setIngredienti($ingredienti){
        $this -> ingredienti = $ingredienti;
    }
}

?>