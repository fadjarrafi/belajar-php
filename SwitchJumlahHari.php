<?php
    $namefile = "SwitchJumlahHari.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Statement Switch</title>
</head>
<body>
    <h3>Demo menggunakan statement switch</h3>
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
            switch ($bulan) {
                case 1:
                    $jumlah = 31;
                    break;
                case 2:
                    $jumlah = 28;
                    break;
                case 3:
                    $jumlah = 31;
                    break;
                case 4:
                    $jumlah = 30;
                    break;
                case 5:
                    $jumlah = 31;
                    break;
                case 6:
                    $jumlah = 30;
                    break;
                case 7:
                    $jumlah = 31;
                    break;
                case 8:
                    $jumlah = 31;
                    break;
                case 9:
                    $jumlah = 30;
                    break;
                case 10:
                    $jumlah = 31;
                    break;
                case 11:
                    $jumlah = 30;
                    break;
                case 12:
                    $jumlah = 31;
                    break;
                default:
                    echo "Anda belum memilih bulan.";
                    exit();
            }
            echo "Jumlah Hari = $jumlah";
        }
    ?>
</body>
</html>