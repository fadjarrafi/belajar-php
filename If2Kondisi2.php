<?php
    $bilangan = $_POST["bilangan"];
    if ($bilangan % 2 == 0) {
        # code...
        echo "$bilangan adalah bilangan GENAP. <br/>";
    } else {
        echo "$bilangan adalah bilangan GANJIL.";
    }
?>