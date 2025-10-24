<?php
require_once 'Hewan.php';
class Burung extends Hewan {
    private $kemampuanTerbang;
    public function __construct($id, $nama, $umur, $habitat, $kemampuan) {
        parent::__construct($id, $nama, "Burung", $umur, $habitat, "&#128038;"); // Icon: Burung
        $this->kemampuanTerbang = $kemampuan;
    }
    public function displaySpesifikInfo() { // Polymorphism
        return $this->displayBaseInfo() . "<p><strong>Terbang:</strong> {$this->kemampuanTerbang}</p>";
    }
    public function beraksi() { return $this->getNama() . " sedang " . ($this->kemampuanTerbang == 'Bisa' ? 'terbang tinggi' : 'berlari cepat') . "."; }
}
?>