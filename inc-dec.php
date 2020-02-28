<!DOCTYPE html>
<html lang="en">
<head>
    <title>Operator increment dan decrement</title>
</head>
<body>
    <h2>Demo operator ++ dan --</h2>
    <?php
        $x = 10;
        echo "<p>";
        echo "Pre-increment";
        echo "<br />Nilai \$x awal = $x";
        echo "<br />Nilai ++\$x awal = $x" . ++$x;
        echo "<br />Nilai \$x akhir = $x";
        echo "<p>";

        $x = 10; // mengubah kembali nilai x menjadi 10
        echo "<p>";
        echo "Post-increment";
        echo "<br />Nilai \$x awal = $x";
        echo "<br />Nilai \$x++ awal = $x" . $x++;
        echo "<br />Nilai \$x akhir = $x";
        echo "<p>";

        $y = 10; 
        echo "<p>";
        echo "Pre-decrement";
        echo "<br />Nilai \$y awal = $y";
        echo "<br />Nilai --\$y awal = $y" . --$x;
        echo "<br />Nilai \$y akhir = $y";
        echo "<p>";

        $y = 10; // mengubah kembali nilai y menjadi 10
        echo "<p>";
        echo "Post-decrement";
        echo "<br />Nilai \$y awal = $y";
        echo "<br />Nilai \$y-- awal = $x" . $y--;
        echo "<br />Nilai \$y akhir = $y";
        echo "<p>";
    ?>
</body>
</html>