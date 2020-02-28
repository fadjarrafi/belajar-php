<?php
    $namefile = "IfJumlahHari.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Statement if</title>
</head>
<body>
    <h3>Demo menggunakan statment if</h3>
    <form action="<?php echo $namafile; ?>" method="post">
        Pilih Bulan :
        <select name="bulan" size="l">
            <option value="0">[none]</option>
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select>
        <input type="submit" name="btnSubmit">
    </form>

    <?php
        //menangani form dari file yang sama
        if (isset($_POST["btnSubmit"])) {
            $bulan = $_POST["bulan"];
            if ($bulan == 1) {
                $jumlah = 31;
            } elseif ($bulan == 2) {
                $jumlah = 28; // jika bulan kabisat 29
            } elseif ($bulan == 3) {
                $jumlah = 31;
            } elseif ($bulan == 4) {
                $jumlah = 30;
            } elseif ($bulan == 5) {
                $jumlah = 31;
            } elseif ($bulan == 6) {
                $jumlah = 30;
            } elseif ($bulan == 7) {
                $jumlah = 31;
            } elseif ($bulan == 8) {
                $jumlah = 31;
            } elseif ($bulan == 9) {
                $jumlah = 30;
            } elseif ($bulan == 10) {
                $jumlah = 31;
            } elseif ($bulan == 11) {
                $jumlah = 30;
            } elseif ($bulan == 12) {
                $jumlah = 31;
            } else {
                echo "Anda belum memilih bulan";
                exit();
            }
            echo "Jumlah Hari = $jumlah";
        }
    ?>
</body>
</html>