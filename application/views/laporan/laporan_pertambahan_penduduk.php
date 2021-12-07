<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <center>
        <!-- judul -->
        <h2><?= $title; ?></h2>
        <hr>
    </center>
    <table style="margin-left:auto;margin-right:auto" border="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>KODE RW</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>UMUR</th>
                <th>STATUS PERNIKAHAN</th>
                <th>KATEGORI PERTAMBAHAN</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data_pertambahan as $v) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>00<?= $v['id_rw'] ?></td>
                    <td><?= $v['nik'] ?></td>
                    <td><?= $v['nama'] ?></td>
                    <td><?= $v['tempat_lahir'] ?></td>
                    <td><?= $v['tgl_lahir'] ?></td>
                    <td><?= $v['umur'] ?></td>
                    <td><?= $v['status_kawin'] ?></td>
                    <td><?= $v['kategori_pertambahan'] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- <p>
        keterangan :
    <ol>
        <li>Jumlah lahir Laki-Laki : <?= $totalPertambahan['lahir_l'] ?></li>
        <li>Jumlah lahir Permpuan : <?= $totalPertambahan['lahir_p'] ?></li>
        <li>Jumlah datang Laki-Laki : <?= $totalPertambahan['datang_l'] ?></li>
        <li>Jumlah datang Perempuan : <?= $totalPertambahan['datang_p'] ?></li>
    </ol>
    </p> -->
</body>

</html>