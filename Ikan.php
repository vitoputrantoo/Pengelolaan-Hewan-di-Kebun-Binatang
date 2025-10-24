<?php
require_once 'Hewan.php';
class Ikan extends Hewan {
    private $jenisAir;
    public function __construct($id, $nama, $umur, $habitat, $jenisAir) {
        parent::__construct($id, $nama, "Ikan", $umur, $habitat, "&#128032;"); // Icon: Ikan
        $this->jenisAir = $jenisAir;
    }
    public function displaySpesifikInfo() { // Polymorphism
        return $this->displayBaseInfo() . "<p><strong>Jenis Air:</strong> {$this->jenisAir}</p>";
    }
    public function beraksi() { return $this->getNama() . " berenang di " . $this->jenisAir . "."; }
}
?>