<?php
// SUPERGLOBALS
// variable global milik PHP
// Merupakan Array Associative 

$mahasiswa = [
    [
        "nama" => "Dewanto Krisna",
        "nim" => "A11.2014.08648",
        "email" => "dewanto.krisna@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.png"
    ],
    [
        "nama" => "Krisna Dewanto",
        "nim" => "A11.2014.08678",
        "email" => "krisna.dewanto@gmail.com",
        "jurusan" => "Teknik Industri",
        "tugas" => [90, 80, 100],
        "gambar" => "2.png"
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>List Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="detail.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"] ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"] ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>




</body>

</html>