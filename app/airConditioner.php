<?php
// Definindo a classe Aparelho
class airConditioner{
    // Atributos da classe
    private $id;
    private $coolingCapacity;
    private $brand;
    private $manufactureYear;
    private $inverter;
    private $lastCleaningDate;

    // Construtor para inicializar os atributos
    public function __construct($id,$coolingCapacity, $brand, $manufactureYear, $inverter, $lastCleaningDate) {
        $this->id=$id;
        $this->coolingCapacity = $coolingCapacity;
        $this->brand = $brand;
        $this->manufactureYear = $manufactureYear;
        $this->inverter = $inverter;
        $this->lastCleaningDate = $lastCleaningDate;
    }

    // Métodos para acessar os atributos (getters)
    public function getId() {
        return $this->id;
    }

    public function getPotencia() {
        return $this->coolingCapacity;
    }

    public function getMarca() {
        return $this->brand;
    }

    public function getAnoFabricacao() {
        return $this->manufactureYear;
    }

    public function getInverter() {
        return $this->inverter;
    }

    public function getlastCleaningDate() {
        return $this->lastCleaningDate;
    }

    // Métodos para modificar os atributos (setters)
    public function setId($id) {
        $this->id = $id;
    }
    public function setPotencia($coolingCapacity) {
        $this->coolingCapacity = $coolingCapacity;
    }

    public function setMarca($brand) {
        $this->brand = $brand;
    }

    public function setAnoFabricacao($manufactureYear) {
        $this->manufactureYear = $manufactureYear;
    }

    public function setInverter($inverter) {
        $this->inverter = $inverter;
    }

    public function setlastCleaningDate($lastCleaningDate) {
        $this->lastCleaningDate = $lastCleaningDate;
    }

    // Método para exibir as informações do aparelho
    public function exibirInformacoes() {
        $inverterStatus = $this->inverter ? "Sim" : "Não";
        return "Id: " . $this->id . ", Potência: " . $this->coolingCapacity . " BTUs, Marca: " . $this->brand . 
               ", Ano de Fabricação: " . $this->manufactureYear . ", Inverter: " . $inverterStatus . 
               ", Última Limpeza: " . $this->lastCleaningDate;
    }
}

?>
