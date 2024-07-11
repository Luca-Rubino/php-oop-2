<?php 

class prodotti {
    private $nome;
    private $prezzo;
    private $categoria;
    private $urlImg;

    // costruttori
    public function __construct($nome, $prezzo, $categoria, $urlImg){
        $this -> nome = $nome;
        $this -> prezzo = $prezzo;
        $this -> categoria = $categoria;
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

    // indirizzo immagine
    public function geturlImg(){
        return $this -> urlImg;
    }

    public function seturlImg($urlImg){
        $this -> urlImg = $urlImg;
    }
}

?>