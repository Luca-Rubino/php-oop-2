<?php 

class prodotti {
    public $titolo;
    public $prezzo;
    public $peso;
    public $ingredienti;
    public $categoria;

    // costruttori
    function __construct($categoria, $titolo, $prezzo, $peso, $ingredienti){
        $this -> categoria = $categoria;
        $this -> titolo = $titolo;
        $this -> prezzo = $prezzo;
        $this -> peso = $peso;
        $this -> ingredienti = $ingredienti;
    }

    // titolo
    function getTitolo(){
        return $this -> titolo;
    }

    function setTitolo($titolo){
        $this -> titolo = $titolo;
    }

    // categoria
    function getCategoria(){
        return $this -> categoria;
    }

    function setCategoria($categoria){
        $this -> categoria = $categoria;
    }

    // prezzo
    function getPrezzo(){
        return $this -> prezzo;
    }

    function setPrezzo($prezzo){
        $this -> prezzo = $prezzo;
    }

    // peso
    function getPeso(){
        return $this -> peso;
    }

    function setPeso($peso){
        $this -> peso = $peso;
    }

    // ingredienti
    function getIngredienti(){
        return $this -> ingredienti;
    }

    function setIngredienti($ingredienti){
        $this -> ingredienti = $ingredienti;
    }
}





?>