<?php
    $angka = $_POST["angka"];
    if ($angka < 1 || $angka >10) {
        # code...
        echo "Anda memasukan bilangan $angkaangka.<br/>";
        echo "ERROR: Bilangan harus ". 
             "dalam rentang 1 sampai 10.";
        exit();
    } else {
    echo "Bilangan yang anda masukan adalah $angka";
    }
?>