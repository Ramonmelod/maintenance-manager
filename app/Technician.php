<?php
// Definindo a classe Tecnico
class Technician {
    // Atributos da classe
    private $id;
    private $name;
    private $isPaidUser;
    private $senha;

    // Construtor para inicializar os atributos
    public function __construct($id, $name, $isPaidUser, $senha) {
        $this->id = $id;
        $this->name = $name;
        $this->isPaidUser = $isPaidUser;
        $this->senha = $senha;  // A senha agora faz parte do objeto
    }

    // Métodos para acessar os atributos (getters)
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getIsPaidUser() {
        return $this->isPaidUser;
    }

    public function getSenha() {
        return $this->senha;
    }

    // Método para verificar a senha
    public function verificarSenha($senha) {
        return $this->senha === $senha;
    }
    public function exibirInformacoes() {
        $paidStatus = $this->isPaidUser ? "Sim" : "Não";
        return "ID: " . $this->id . ", Nome: " . $this->name . ", Usuário Pagante: " . $paidStatus;
    }
}
?>
