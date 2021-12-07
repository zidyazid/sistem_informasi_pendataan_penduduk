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
                <th>No</th>
                <th>No RW</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>UMUR</th>
                <th>KEWARGANEGARAAN</th>
                <th>JENIS KELAMIN</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data_sekarang as $v) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>00<?= $v['id_rw'] ?></td>
                    <td><?= $v['nik'] ?></td>
                    <td><?= $v['nama'] ?></td>
                    <td><?= $v['tempat_lahir'] ?></td>
                    <td><?= $v['tgl_lahir'] ?></td>
                    <td><?= $v['umur'] ?></td>
                    <td><?= $v['kewarganegaraan'] ?></td>
                    <td><?= $v['jenis_kelamin'] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- <p>
        keterangan :
    <ol>
        <li>Jumlah WNI Laki-Laki : <?= $totalPenduduk['wni_l'] ?></li>
        <li>Jumlah WNI Permpuan : <?= $totalPenduduk['wni_p'] ?></li>
        <li>Jumlah WNA Laki-Laki : <?= $totalPenduduk['wna_l'] ?></li>
        <li>Jumlah WNA Perempuan : <?= $totalPenduduk['wna_p'] ?></li>
    </ol>
    </p> -->
</body>

</html>