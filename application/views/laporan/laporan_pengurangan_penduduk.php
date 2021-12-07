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
                <th>Kode RW</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kategori Perpindahan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data_pengurangan as $v) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>00<?= $v['id_rw'] ?></td>
                    <td><?= $v['nik'] ?></td>
                    <td><?= $v['nama'] ?></td>
                    <td><?= $v['tempat_lahir'] ?></td>
                    <td><?= $v['tgl_lahir'] ?></td>
                    <td><?= $v['kategori_perpindahan'] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- <p>
        keterangan :
    <ol>
        <li>Jumlah mati Laki-Laki : <?= $dataPengurangan['mati_l'] ?></li>
        <li>Jumlah mati Permpuan : <?= $dataPengurangan['mati_p'] ?></li>
        <li>Jumlah pindah Laki-Laki : <?= $dataPengurangan['pindah_l'] ?></li>
        <li>Jumlah pindah Perempuan : <?= $dataPengurangan['pindah_p'] ?></li>
    </ol>
    </p> -->
</body>

</html>