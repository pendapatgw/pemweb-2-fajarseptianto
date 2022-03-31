<?php

$proses = $_POST['proses'];
$nama_mahasiswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) /3;
$grade = "";
if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
    $grade = "A";
} elseif ($nilai_akhir >= 70 && $nilai_akhir < 85) {
    $grade = "B";
} elseif ($nilai_akhir >= 56 && $nilai_akhir < 69) {
    $grade = "C";
} elseif ($nilai_akhir >= 36 && $nilai_akhir < 55) {
    $grade = "D";
} elseif ($nilai_akhir >= 0 && $nilai_akhir < 36) {
    $grade = "E";
} else {
    $grade = "I";
}

$predikat = "";
switch ($grade) {
    case 'A':
        $predikat = "Sangat Memuaskan";
        break;
    case 'B':
        $predikat = "Memuaskan";
        break;
    case 'C':
        $predikat = "Cukup";
        break;
    case 'D':
        $predikat = "Kurang";
        break;
    case 'E':
        $predikat = "Sangat Kurang";
        break;
    default:
        break;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <title>kalkulasi</title>
</head>
<body>
    <p ><?php echo 'nama =' .$nama_mahasiswa?></p>
    <p><?php echo'mata kuliah = '.$mata_kuliah?></p>
    <p><?php echo'nilai uts = '.$nilai_uts?></p>
    <p><?php echo'nilai uas = '.$nilai_uas?></p>
    <p><?php echo'nilai tugas = '.$nilai_tugas?></p>
    <p><?php echo'grade = '.$grade?></p>
    <p><?php echo'predikat = '.$predikat?></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>