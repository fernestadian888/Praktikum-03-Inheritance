<?php
class pegawai {
 public $nip;
 public $nama;
 public $no_hp;
 public $gaji_pokok;
 
 function __construct($nip,$nama,$nohp,$gp){
   $this->nip = $nip;
   $this->nama = $nama;
   $this->no_hp = $nohp;
   $this->gaji_pokok = $gp;
 }
 
 public function tampilkanGaji(){
   echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
 }
 
}
?>
