<?php
$mahasiswa1 = [
    'id'=>'1', 
    'NIM'=>112299,
    'UTS'=>98,
    'UAS'=>90,
    'Tugas'=>88,
];
$mahasiswa2 = [
    'id'=>'2', 
    'NIM'=>1182299,
    'UTS'=>97,
    'UAS'=>92,
    'Tugas'=>77,
];
$mahasiswa3 = [
    'id'=>'3', 
    'NIM'=>1122099,
    'UTS'=>98,
    'UAS'=>95,
    'Tugas'=>80,
];

$ar_nilai =[$mahasiswa1, $mahasiswa2, $mahasiswa3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
            <tr>
            <td><?= $nilai['id'];?></td>
            <td><?= $nilai['NIM'];?></td>
            <td><?= $nilai['UTS'];?></td>
            <td><?= $nilai['UAS'];?></td>
            <td><?= $nilai['Tugas'];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>