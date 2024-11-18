<?php
// Definindo a classe Aparelho
class AirConditioner{
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

    public function getCoolingCapacity() {
        return $this->coolingCapacity;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getManufactureYear() {
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
    public function setCoolingCapacity($coolingCapacity) {
        $this->coolingCapacity = $coolingCapacity;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setManufactureYear($manufactureYear) {
        $this->manufactureYear = $manufactureYear;
    }

    public function setInverter($inverter) {
        $this->inverter = $inverter;
    }

    public function setlastCleaningDate($lastCleaningDate) {
        $this->lastCleaningDate = $lastCleaningDate;
    }

    // Método para exibir as informações do aparelho
    public function showInformations() {
        $inverterStatus = $this->inverter ? "Sim" : "Não";
        return "Marca: " . $this->brand . ", Potência: " . $this->coolingCapacity . " BTUs, Última Limpeza: " . $this->lastCleaningDate. " Inverter: " . $inverterStatus;
    }
}

?>
