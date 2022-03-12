<?php
$proses = $_GET['proses'];
$nama_mahasiswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

// echo 'proses : ' .$proses;
// echo '<br/>nama : ' .$nama_mahasiswa;
// echo '<br/>mata kuliah : ' .$mata_kuliah;
// echo '<br/>Nilai UTS : ' .$nilai_uts;
// echo '<br/>Nilai UAS : ' .$nilai_uas;
// echo '<br/>Nilai Tugas Praktikum : ' .$nilai_tugas;
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <main>
    <h3 class="text-center">Form nilai mahasiswa</h3>
    <div class="container">
        <form method="GET" action="method-get.php">
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                    <input id="text1" name="nama" placeholder="nama lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                        <select id="select" name="matkul" class="custom-select">
                        <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                        <option value="Basis Data I">Basis Data I</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        </select>
                    </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                        <input id="text" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                    </div>
            </div>
            <div class="form-group row">
                <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                    <input id="text2" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="text3" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" value="simpan"  class="btn btn-primary">Submit</button>
                </div>
            </div>
</form>
    <p class="text-center text-capitalize"> <?php echo 'nama : ' .$nama_mahasiswa;?> </p>
    <p class="text-center text-capitalize"> <?php echo 'mata kuliah : ' .$mata_kuliah; ?></p>
    <p class="text-center text-capitalize"> <?php echo 'Nilai UTS : ' .$nilai_uts; ?></p>
    <p class="text-center text-capitalize"> <?php echo 'Nilai UAS : ' .$nilai_uas;?> </p>
    <p class="text-center text-capitalize"> <?php echo 'Nilai Tugas Praktikum : ' .$nilai_tugas;?> </p>
    <p class="text-center text-capitalize"> <?php echo 'Grade : ' .$grade;?> </p>
    <p class="text-center text-capitalize"><?php echo 'predikat : ' .$predikat;?></p>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>