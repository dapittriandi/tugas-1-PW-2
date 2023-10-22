<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operasi Matematika</title>
</head>
<body>
    <?php
        $_Angka = 10;

        echo 'Aku adalah angka ' . $_Angka . '.' .'</br>';
        echo 'Jika aku di kali' . ' 8' . ',' . 'jumlahku sekarang ' . ( $_Angka * 8 ). '.' .'</br>';
        echo 'Jika aku di bagi' . ' 4' . ',' . 'jumlahku sekarang ' . (($_Angka * 8 ) / 4) . '.' .'</br>';
        echo 'Jika aku di dikurang' . ' 6' . ',' . 'jumlahku sekarang ' . (($_Angka * 8 ) / 4 - 6) . '.' .'</br>';
        echo 'Jika aku di ditambah' . ' 2' . ',' . 'jumlahku sekarang ' . (($_Angka * 8 ) / 4 - 6 + 2) . '.' .'</br>';
    ?>
</body>
</html>