<?php
class __persegipanjang{
    public $panjang;
    public $lebar;

    public function luasperpan(){
        $luas=$this-> panjang*$this-> lebar;
        return "Luas : ".$luas;
    }
    public function kelilingperpan(){
        $keliling=2*($this-> panjang + $this-> lebar);
        return "Keliling : ".$keliling;
    }
    public function setlebarp($lebar){
        return $this->lebar = $lebar;
    }
    public function setpanjangp($panjang){
        return $this->panjang = $panjang;
    }
}
$luaspersegi = new __persegipanjang();
echo "Panjang : ".$luaspersegi-> setpanjangp(15);
echo "<br>";
echo "Lebar : ".$luaspersegi-> setlebarp(7);
echo "<br>";
echo $luaspersegi-> luasperpan();
echo "<br>";
echo $luaspersegi-> kelilingperpan();
?>