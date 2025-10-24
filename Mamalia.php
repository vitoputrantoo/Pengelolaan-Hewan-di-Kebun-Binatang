<?php
require_once 'Hewan.php';
class Mamalia extends Hewan {
    private $makanan;
    public function __construct($id, $nama, $umur, $habitat, $makanan) {
        parent::__construct($id, $nama, "Mamalia", $umur, $habitat, "&#128004;"); // Icon: Singa
        $this->makanan = $makanan;
    }
    public function displaySpesifikInfo() { // Polymorphism
        return $this->displayBaseInfo() . "<p><strong>Makanan:</strong> {$this->makanan}</p>";
    }
    public function beraksi() { return $this->getNama() . " sedang berjalan di padang rumput."; }
}
?>