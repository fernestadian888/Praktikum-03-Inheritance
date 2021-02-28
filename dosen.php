<?php
class Mahasiswa {
 public $nim;
 public $nama;
 public $tanggal_lahir;
 public $jenis_kelamin;
 
 function __construct($nidn,$ja,$mg,$mn){
   $this->nidn = $nidn;
   $this->jabatan_akademis = $ja;
   $this->mengajar = $mg;
   $this->meneliti = $mn;
 }
 
}
?>
