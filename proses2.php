<?php
$n1 = ($_POST['nilai1']);
$n2 = ($_POST['nilai2']);
$rumus = ($_POST['rumus']);


if ($n1 == '' ||  $n2 == '') {
    echo 'Nilai 1 dan 2 nya blm ada yang lu isi bang jan sok asik ngapa dah';
} else {
    if ($rumus == 'LS') {
        function segitiga($n1, $n2)
        {
            $alas = $n1;
            $tinggi = $n2;
            $luas = 0.5 * $alas * $tinggi;
            return $luas;
        }
        echo segitiga($n1, $n2);
    }


    if ($rumus == 'LPP') {
        function Persegipanjang($n1, $n2)
        {
            $panjang = $n1;
            $lebar = $n2;
            $luass = $panjang * $lebar;
            return $luass;
        }
        echo Persegipanjang($n1, $n2);
    }
}
