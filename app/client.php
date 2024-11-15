<?php
// Definindo a classe Client
class Client {
    // Atributos da classe
    private $id;
    private $name;
    private $email;
    private $airConditioner;
    private $password;

    // Construtor da classe para inicializar os atributos
    public function __construct($id, $name, $email,$password) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->airConditioner = [];
        $this->password = $password;  
    }

    // Métodos para acessar os atributos (getters)
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }


    public function getAirConditioner() {
        return $this->airConditioner;
    }
    public function getPassword() {
        return $this->password;
    }


    // Métodos para modificar os atributos (setters)
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function addAirConditioner($airConditioner) {
        $this->airConditioner[] = $airConditioner; 
    }
    public function checkPassword($password) {
        return $this->password === $password;
    }

    // Método para exibir as informações do cliente
    public function exibirInformacoes() {
        return "ID: " . $this->id . ", Nome: " . $this->name . ", Aparelho: " . $this->airConditioner;
    }
}

?>
