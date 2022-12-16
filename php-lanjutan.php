<?php

$nama = "Alam";
$nama1 = "Kurnia";
$nama2 = "AlFatah";

//Perulangan

$no = 10;

for ($i=0; $i<$no; $i++){
    $n = $i + 1;
    echo $n." ".$nama."<br>";
}

$i = 0;

while ($i < $no){
    $n = $i + 1;
    echo $n." ".$nama1."<br>";
    $i++;
}

$k = 0;

do{
    $n = $k + 1;
    echo $n." ".$nama2."<br>";
    $k++;
} while ($k < $no);

$data = array('honda', 'suzuki', 'xenia', 'tesla', 'mio');

echo $data[4]."<br>";
foreach ($data as $value){
    echo $value."<br>";
}

//Percabangan

if ($nama == "Alam"){
    echo $nama." adalah orang Malang";
} else if ($nama == "Kurnia"){
    echo $nama." bukan orang malang";
} else{
    echo $nama." anaknya orang";
}

echo "<br>";

switch ($nama1){
    case "Kurnia":
        $pesan = $nama1." bukan orang malang";
    break;
    case "AlFatah":
        $pesan = $nama1." anaknya orang";
    break;
    default:
    $pesan = $nama1." adalah orang Malang";
}
echo $pesan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input dan perulangan data</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php

        if (!empty($_POST['submit'])){
            switch ($_POST['nama']){
                case "Kurnia":
                    $pesan = $_POST['nama']." bukan orang malang";
                break;
                case "AlFatah":
                    $pesan = $_POST['nama']." anaknya orang";
                break;
                default:
                $pesan = $_POST['nama']." adalah orang Malang";
            }

            for ($i=0; $i<$_POST['no']; $i++){
                echo $pesan."<br>";
            }
        } else{
            echo "Anda belum memasukkan nama dan jumlah";
        }
    ?>
</body>
</html>