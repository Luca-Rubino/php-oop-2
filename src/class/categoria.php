<?php 

class categoria {
    private $categoria;

    // costruttori
    public function __construct($categoria){
        $this -> categoria = $categoria;
    }

    public function getcategoria(){
        return $this -> categoria;
    }

    public function setcategoria($categoria){
        $this -> categoria = $categoria;
    }

    public function __toString() {
        return $this -> categoria;
    }
}

?>