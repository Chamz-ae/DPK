<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "10";
    header("Refresh: $sec; url=$page");
    echo "<br>";
    ?>

    <?php
    $nama = array(
        "Ezi",
        "Majid",
        "Alvin",
        "Nanda",
        "Rosyid",
        "Celis",
        "Denall",
        "Denis",
        "Bima",
        "Hafidz",
        "Vito",
        "Ian",
        "Jauza",
        "Keyza",
        "Lazuardi",
        "Mesa",
        "Torvald",
        "Dzaky",
        "Galih",
        "Syafiq",
        "Dirga",
        "Hisyam",
        "Vania",
        "Rafa",
        "Rafael",
        "Reza",
        "Ronald",
        "Gantari",
    );

    $jurusan = array("RPL", "TKJ", "ANIMASI", "DKV", "AKUNTANSI", "BROCASTING");

    echo $nama[0] . "<br>";
    echo $nama[1] . "<br>";
    echo $nama[24] . "<br>";
    echo $nama[21] . "<br>";
    echo $nama[23] . "<br>";
    echo "<hr>";


    for ($i = 0; $i < count($jurusan); $i++) {
        echo $jurusan[$i] . "<hr>";
    }
    ?>

    <?php
    $Hewan = array("Kucing", "Anjing", "Kelinci", "Ular", "Ceetah");
    $i = 0;
    while ($i < count($Hewan)) {
        echo $Hewan[$i] . "<hr>";
        $i++;
    }
    ?>

    <?php
    $food = array("Mie", "Nasi", "Anggur", "Ayam", "Icecream");

    foreach ($food as $isi) {
        echo $isi . "<hr>";
    }

    ?>
</body>

</html>