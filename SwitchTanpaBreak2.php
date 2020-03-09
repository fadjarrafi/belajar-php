<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Demo ke-2 menggunakan switch tanpa break</h3>
    <?php 
        $a = 2;
        switch ($a) {
            case 1:
                echo "nilai konstan 1 <br/>";
            case 2:
                echo "nilai konstan 2 <br />";
            case 3:
                echo "nilai konstan 3 <br />";
            case 4:
                echo "nilai konstan 4 <br />";
            default:
                # code...
                break;
        }
    ?>
</body>
</html>