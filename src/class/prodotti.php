<?php 

class prodotti {
    private $nome;
    private $prezzo;
    private $peso;
    private $ingredienti;
    private $categoria;
    private $urlImg;

    // costruttori
    public function __construct($nome, $prezzo, $peso, $ingredienti, $categoria, $urlImg){
        $this -> categoria = $categoria;
        $this -> nome = $nome;
        $this -> prezzo = $prezzo;
        $this -> peso = $peso;
        $this -> ingredienti = $ingredienti;
        $this -> urlImg = $urlImg;
    }

    // nome
    public function getNome(){
        return $this -> nome;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

    // categoria
    public function getCategoria(){
        return $this -> categoria;
    }

    public function setCategoria($categoria){
        $this -> categoria = $categoria;
    }

    // prezzo
    public function getPrezzo(){
        return $this -> prezzo;
    }

    public function setPrezzo($prezzo){
        $this -> prezzo = $prezzo;
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

    // indirizzo immagine
    public function geturlImg(){
        return $this -> urlImg;
    }

    public function seturlImg($urlImg){
        $this -> urlImg = $urlImg;
    }
}





?>