<?php 
require_once __DIR__ . '/prodotti.php';

class accessori extends prodotti {
    private $materiali;
    private $misura;

    // costruttori
    public function __construct($nome, $prezzo, $peso, $ingredienti, $categoria, $urlImg, $materiali, $misura,){
        parent::__construct($nome, $prezzo, $peso, $ingredienti, $categoria, $urlImg, $materiali, $misura,);
        $this -> materiali = $materiali;
        $this -> misura = $misura;
    }

    // materiali
    public function getMateriali(){
        return $this -> materiali;
    }

    public function setMateriali($materiali){
        $this -> materiali = $materiali;
    }

    // misura
    public function getMisura(){
        return $this -> misura;
    }

    public function setMisura($misura){
        $this -> misura = $misura;
    }
}

?>