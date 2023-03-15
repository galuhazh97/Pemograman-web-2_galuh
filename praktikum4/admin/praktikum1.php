<?php 
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>
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
    <?php require_once "layouts/footer.php";?>