<?php 

// define('NAMA', 'Thomas Ardiansah');
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;



// class Coba {
//     const NAMA = "Thomas";
// }

// echo Coba::NAMA;

// magic constant PHP
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

// echo __LINE__;

// function coba() {
//     return __FUNCTION__;
// }
// echo coba();

class Coba {
    public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;

?>