<?php
require_once 'Hewan.php';
class Reptil extends Hewan {
    private $suhuTubuh;
    public function __construct($id, $nama, $umur, $habitat, $suhuTubuh) {
        parent::__construct($id, $nama, "Reptil", $umur, $habitat, "&#128013;"); // Icon: Kadal
        $this->suhuTubuh = $suhuTubuh;
    }
    public function displaySpesifikInfo() { // Polymorphism
        return $this->displayBaseInfo() . "<p><strong>Suhu Tubuh:</strong> {$this->suhuTubuh}</p>";
    }
    public function beraksi() { return $this->getNama() . " sedang berjemur untuk menghangatkan diri."; }
}
?>