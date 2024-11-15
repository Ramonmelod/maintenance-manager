<?php
// Definindo a classe Client
class Client {
    // Atributos da classe
    private $id;
    private $name;
    private $airConditioner;

    // Construtor da classe para inicializar os atributos
    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        $this->airConditioner = [];
    }

    // Métodos para acessar os atributos (getters)
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAirConditioner() {
        return $this->airConditioner;
    }

    // Métodos para modificar os atributos (setters)
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function addAirConditioner($airConditioner) {
        $this->airConditioner[] = $airConditioner; 
    }


    // Método para exibir as informações do cliente
    public function exibirInformacoes() {
        return "ID: " . $this->id . ", Nome: " . $this->name . ", Aparelho: " . $this->airConditioner;
    }
}

?>
