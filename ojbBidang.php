<?php
require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';
$ar_judul = ['No','Nama Bidang','Keterangan','Luas Bidang','Keliling Bidang'];
$L1 = new lingkaran(14);
$P1 = new persegipanjang(5,4);
$S1 = new segitiga(3,4);
$Bidang = [$L1,$P1,$S1];
//$ket = "nama Bidang = " $Bidang->namaBidang();
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>tugas 5 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Daftar Bidang</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($Bidang as $bd){
                //rumus2
                ?>
                <tr>
                    <td><?= $no?></td>
                    <td><?= $bd->namaBidang()?></td>
                    <td><!--?= $ket?--></td>
                    <td><?= $bd->luasBidang()?></td>
                    <td><?= $bd->kelilingBidang()?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>