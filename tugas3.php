<?php
$m1 = ['nim' => '001', 'nama' => 'mashud' , 'nilai' => 72];
$m2 = ['nim' => '002', 'nama' => 'budi' , 'nilai' => 64];
$m3 = ['nim' => '003', 'nama' => 'rizki' , 'nilai' => 88];
$m4 = ['nim' => '004', 'nama' => 'pardana' , 'nilai' => 76];
$m5 = ['nim' => '005', 'nama' => 'danang' , 'nilai' => 97];
$m6 = ['nim' => '006', 'nama' => 'XXX' , 'nilai' => 35];
$m7 = ['nim' => '007', 'nama' => 'thanos' , 'nilai' => 19];
$m8 = ['nim' => '008', 'nama' => 'logan' , 'nilai' => 75];
$m9 = ['nim' => '009', 'nama' => 'sanjaya' , 'nilai' => 47];
$m10 = ['nim' => '010', 'nama' => 'dudung' , 'nilai' => 54];

$kmlmhs = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
$kmljdl = ['No', 'Nim', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
$jumlah_siswa = count($kmlmhs);
$jml_n = array_column($kmlmhs,'nilai');
$total_n = array_sum($jml_n);
$max_n = max($jml_n);
$min_n = min($jml_n);
$rata2 = $total_n / $jumlah_siswa;
//keterangan
$keterangan = [
    'Jumlah Mahasiswa'=>$jumlah_siswa,
    'Nilai Tertinggi'=>$max_n,
    'Nilai Terendah'=>$min_n,
    'Rata2'=>$rata2
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="text-center">Daftar Nilai</h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <?php
                foreach ($kmljdl as $judul) {
                ?>
                <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($kmlmhs as $mhs) {
            $nilai = $mhs['nilai'];
            $kat = ($nilai >= 60) ? 'Lulus':'Gagal';
            if ($nilai >= 80 && $nilai <= 100) {
                $grade = 'A';
            }
            elseif ($nilai >= 60 && $nilai < 80) {
                $grade = 'B';
            }
            elseif ($nilai >= 40 && $nilai < 60) {
                $grade = 'C';
            }
            elseif ($nilai >= 20 && $nilai < 40) {
                $grade = 'D';
            }
            elseif ($nilai >= 0 && $nilai < 20) {
                $grade = 'E';
            }
            else {
                $grade = '';
            }
            switch ($grade) {
                case 'A':
                    $predikat = 'memuaskan';
                    break;
                case 'B':
                    $predikat = 'sedikit lagi juara';
                    break;
                case 'C':
                    $predikat = 'bagus';
                    break;
                case 'D':
                    $predikat = 'coba lagi';
                    break;
                case 'E':
                    $predikat = 'Buruk';
                    break;
                
                default:
                    $predikat = '';
                    break;
            }
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['nilai'] ?></td>
                <td><?= $kat ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
        <tfoot>
            <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="6"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
        </tfoot>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>