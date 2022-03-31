<?php
    require_once 'rumus.php';

$proses= $_POST['proses'];
$nama_mahasiswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$nilai_total = ($nilai_tugas + $nilai_uas + $nilai_uts) / 3;
$casting_nilai = (int)$nilai_total;

$status = kelulusan($casting_nilai);
$predikat = grade($casting_nilai);
$keterangan = predikat($predikat);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container">
      <div>
        <div class="d-flex flex-column justify-content-center align-items-center">
          <p class="text-capitalize"> Nama : <?= $nama_mahasiswa?></p>
          <p class="text-capitalize">Mata kuliah : <?= $mata_kuliah?></p>
          <p class="text-capitalize">Nilai uts: <?= $nilai_uts?></p>
          <p class="text-capitalize">Nilai uas: <?=$nilai_uas?></p>
          <p class="text-capitalize">nilai tugas: <?=$nilai_tugas?></p>
          <p class="text-capitalize">grade : <?= $casting_nilai?></p>
          <p class="text-capitalize">predikat:<?= $predikat?></p>
          <p class="text-capitalize">status: <?= $status?></p>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>