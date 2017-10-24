<?php
// buat class supermarket
class supermarket {
 
   public $Griya,$Yogya,$Borma,$Alfa ;
  
  
   public function __construct($a,$b,$c,$d){
   $this->Griya =$a;
   $this->Yogya =$b;
   $this->Borma =$c;
   $this->Alfa  =$d;
   }
  
   public function get_gy(){
     return $this->Griya;
   }
   public function get_yy(){
     return $this->Yogya;
 }
   public function get_ba(){
    return $this->Borma;
   }
   public function get_aa(){
    return $this->Alfa;
   }}
  ?>