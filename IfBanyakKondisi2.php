<?php
    $uts = $_POST["uts"];
    $uas = $_POST["uas"];

    //menghitung nilai akhir, 40% UTS dan 60% UAS
    $na = ( 0.4 * $uts) + (0.6 * $uas);
    if ($na >= 80) {
        $index = 'A';
    } elseif ($na >= 70) {
        $index = 'B';
    } elseif ($na >= 50) {
        $index = 'C';
    } elseif ($na >= 40) {
        $index = 'D';
    } else {
        $index = 'E';
    }
    echo "Nilai UTS = $uts<br />";
    echo "Nilai UAS = $uas<br />";
    echo "Nilai Akhir = <strong>$na</strong><br />";
    echo "Nilai Index = <strong>$index</strong><br />"
?>