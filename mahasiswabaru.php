<?php
class Mahasiswa {
 public $no_registrasi;
 public $bayarGedung;
 
 function __construct($nor,$bg){
   $this->no_registrasi = $nor;
   $this->bayarGedung = $bg;
 }
 
}
?>
