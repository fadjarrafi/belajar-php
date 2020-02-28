<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel</title>
</head>
<body>
<h2>Demo membuat dan menggunakan variabel</h2>
<?php
    // Variabel merupakan suatu pengenal dalam program yang merepresentasikan nilai atau data tertentu
    // dalam PHP, variabel didefinisikan dengan cara memberi tanda $ (dollar) didepan nya
    
    //membuat dan menginisiasi nilai variabel
    $varString = 'variabel bertipe string';
    $varFloat = 3.14;
    $varInterger = 22;

    //mencetak nilai variabel ke layar browser
    echo $varString . "<br />";
    echo $varFloat . "<br />";
    echo $varInterger;
?>
</body>
</html>