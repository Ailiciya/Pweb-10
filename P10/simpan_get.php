<?php
    if (isset($_GET['hitung'])) {

        $tinggi = $_GET['tinggi'];
        $panjang = $_GET['panjang'];

        if ($tinggi == "" or $panjang == "") {
            echo "<font color='blue'>Anda belum memasukkan nilai tinggi & panjang</font>";
        } else {
            $luas = $tinggi * $panjang;
            echo "Nilai Tinggi = " . $tinggi . "<br>";
            echo "Nilai Panjang = " . $panjang . "<br>";
            echo "Luas Persegi Panjang = " . $luas;
        }
    } else {
        echo "<font color='red'>Masukkan nilai tinggi & panjang !</font>";
}
?>