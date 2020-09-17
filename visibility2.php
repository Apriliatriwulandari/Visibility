<?php
class komputer{
  public $prosesor,
          $memory;
          private $harga;
          protected $diskon;

    public function getcetak(){
        return "$this->prosesor, $this->memory, $this->harga";
    }
      
    public function __construct($prosesor=" ",$memory="0 Gb",$harga=0){
        $this->prosesor = $prosesor;
        $this->memory = $memory;
        $this->harga = $harga;

    }
    public function cetakinfo(){
        $str="{$this->getcetak()}";
        return $str;
  }
    public function Diskon($diskon){
          $this->diskon = $diskon;
    }
    public function Harga(){
        return $this->harga-($this->harga*$this->diskon/100);
    }
  }

  class Kgaming extends komputer {
      public $game = false;

      public function jalankangame(){
          $this->game = true;
          return "Game dijalankan";
      }
     
  }
  
  $komputerSaya = new komputer("Core i7","8 Gb",10000);
  echo $komputerSaya->cetakinfo(); 
  echo "<br>"; 
  $komputer1 = new Kgaming();
  echo $komputer1->jalankangame();
  echo "<hr>"; 
  $komputerSaya->Diskon(50);
  echo $komputerSaya->Harga();

?>