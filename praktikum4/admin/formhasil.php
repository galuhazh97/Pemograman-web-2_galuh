<?php 
require_once "layouts/header.php";
require_once "layouts/menu.php";?>
    <div class="container">
        <table class="table table-bordered text-uppercase">
            <tr class="table-primary">
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Total nilai</th>
                <th>keterangan</th>
            </tr>
            <?php require_once "../../praktikum2/praktik/proses_nilai.php"; ?>
            <tr>
                <td><?= $nama;?></td>
                <td><?= $matkul;?></td>
                <td><?= $tugas;?></td>
                <td><?= $uts;?></td>
                <td><?= $uas;?></td>
                <td><?= number_format($total_nilai,1);?></td>
                <td><?= $keterangan;?></td>

            </tr>
        </table>
    </div>
    <?php require_once "layouts/footer.php";?>