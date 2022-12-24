<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Gandakan Sepuasmu!</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah Pengulangan</label>
        <input type="text" name="no"> <br><br>
        <input type="submit" name="submit" value="Gandakan Namamu!!!">
</form>
<?php
    if(!empty($_POST['submit'])) {
        switch($_POST['nama']) {
            case "Lionel":
                $pesan = $_POST['nama']." adalah orang Argentina";
                break;
            case "Nguyen":
                $pesan = $_POST['nama']." adalah orang Vietnam";
                break;
            default:
                $pesan = $_POST['nama']." dari mana ya?";
        }
        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }

    } else {
        echo "Anda belum input nama dan jumlah";
    }
?>
</body>
</html>