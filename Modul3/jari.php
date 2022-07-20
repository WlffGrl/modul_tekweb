<?php
class hitung{
    public $jari;
    public $luas;
    public $keliling;

    function set_jari($jari){
        $this-> jari = $jari;
    }

    function get_jari($jari){
        $jari=$this->jari;
        return $jari;
    }

    function get_luas($jari){
        $luas=3.14*$jari*$jari;
        echo "luas lingkaran adalah " .$luas;
    }

    function get_keliling($jari){
        $keliling=2*3.14*$jari;
        echo "Keliling lingkaran adalah ".$keliling;
    }
}
$LingkaranBaru = new hitung ();
$LingkaranBaru->get_luas(5);
echo "<br>";
$LingkaranBaru->get_keliling(5);
?>