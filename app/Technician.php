<?php
// Definindo a classe Tecnico
class Technician {
    // Atributos da classe
    private $id;
    private $name;
    private $email;
    private $client=[];
    private $isPaidUser;
    private $password;


    // Construtor para inicializar os atributos
    public function __construct($id, $name, $email, $isPaidUser, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->isPaidUser = $isPaidUser;
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
    public function getClient() {
        return $this->client;
    }

    public function getIsPaidUser() {
        return $this->isPaidUser;
    }

    public function getPassword() {
        return $this->password;
    }


    public function setId($id) {
        $this->id = $id;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setClient($client) {
        $this->client = $client;
    }
    
    public function setIsPaidUser($isPaidUser) {
        $this->isPaidUser = $isPaidUser;
    }
    
    public function setPassword($password) {
        $this->password = $password;
    }
    public function addClient($client) {
        $this->client[] = $client; 
    }


  
    public function checkPassword($password) {
        return $this->password === $password;
    }
    public function showInformation() {
        $paidStatus = $this->isPaidUser ? "Sim" : "Não";
        return "ID: " . $this->id . ", Nome: " . $this->name . ", Usuário Pagante: " . $paidStatus;
    }
}
?>
