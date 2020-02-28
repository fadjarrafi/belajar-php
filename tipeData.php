<?php
    // interger
    // adalah tipe data yang merepresentasikan bilangan utuh atau bulat
    // rentang yang diperbolehkan adalah -2.147.483.648 sampai +2.147.483.648
    2009;
    -212;

    //floating-point (bilangan riil)
    // tipe data yang merepresentasikan nilai-nilai numerik dalam bentuk pecahan atau mengandung angka desimal di belakang koma
    3.14;
    -7.1;

    //string
    //php mendukung dua tipe string
    // string yang di apit petik dua dan petik satu
    echo "string dalam petik dua\n";
    echo 'string dalam petik satu';

    //Boolean
    //tipe data yang merepresentasikan nilai kebenaran (truth value)
    // nilai yang mungkin dimasukan dalam variabel boolean adalah false dan true
    //tipe ini biasa dijumpai pada pendefinisian kondisi, baik dalam struktur pemilihan maupun perulangan
    // if ($kondisi){
    //      lakukan sesuatu
    // }

    //array
    //merupakan variabel yang menampung banyak data atau sekelompok nilai
    $person[0] = "Fadjar";
    $person[1] = "Andi";

    $person['Guru'] = "Fadjar";
    $person['Murid'] = "Andi";

    // berikut konstruksi untuk membentuk suatu array
    $person = array('Fadjar', 'Andi');
    $person = array('Guru' => 'Fadjar' ,
                    'Murid'=> 'Andi');

    // mengakses array melalui blok perluangan foreach
    foreach ($person as $guru ) {
        # code...
        echo "Halo, $guru\n";
    }

    foreach ($person as $status => $murid) {
        # code...
        echo "status murid $murid aktif di sekolah\n";
    }


?>