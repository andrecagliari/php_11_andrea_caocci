<?php

class Car {
    private $num_telaio;

    // Costruttore
    public function __construct($telaio) {
        $this->num_telaio = $telaio;
    }

    // Metodo protetto per accedere al numero di telaio
    protected function getTelaio() {
        return $this->num_telaio;
    }
}

class Fiat extends Car {
    protected $license;
    protected $name;

    // Costruttore
    public function __construct($name, $license, $telaio) {
        parent::__construct($telaio);
        $this->name = $name;
        $this->license = $license;
    }

    // Metodo pubblico per stampare la descrizione
    public function descrizione() {
        echo "La mia macchina è {$this->name}, con targa {$this->license} e numero di Telaio " . $this->getTelaio() . ".\n";
    }
}

// --------- ESEMPIO DI UTILIZZO ---------

$macchina = new Fiat("Opel", "ND 123 OJ", "1234");
$macchina->descrizione();
