<?php
require_once "./class_bmipasien.php";
  $nama = $_POST['nama'];
  $gender = $_POST['gender'];
  $umur = $_POST['umur'];
  $berat = $_POST['berat'];
  $tinggi = $_POST['tinggi'];
  $proses = $_POST['proses'];

  $pasien1 = new bmiPasien(58,183,date("d-m-y"));
  $pasien1->nama = "ahmad";
  $pasien1->gender = "laki-laki";
  $pasien1->umur = "24";

  
  $pasien2 = new bmiPasien(58,174,date("d-m-y"));
  $pasien2->nama = "rina";
  $pasien2->gender = "perempuan";
  $pasien2->umur = "19";

  $pasien3 = new bmiPasien(68,183,date("d-m-y"));
  $pasien3->nama = "lutfi";
  $pasien3->gender = "laki-laki";
  $pasien3->umur = "27";

  $pasien4 = new bmiPasien($berat,$tinggi,date("d-m-y"));
  $pasien4->nama = $nama;
  $pasien4->gender = $gender;
  $pasien4->umur = $umur;
  
  $ar_pasien = [$pasien1,$pasien2,$pasien3,$pasien4];
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Result - BMI</title>
    <!-- link bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- ends here -->
    <!-- personal css -->
    <link rel="stylesheet" href="./assets/style.css" />
    <!-- ends here -->
  </head>
  <body class="bg-primary">
    <section id="home">
      <div class="container bg-primary">
        <div class="header">
          <h2 class="text-center text-capitalize text-light">data berhasil di <span class="fst-italic">input</span></h2>
        </div>
        <div class="forTable">
          <table class="table table-hover table-dark text-capitalize">
            <thead>
              <tr>
                <th>no</th>
                <th>tanggal periksa</th>
                <th>nama pasien</th>
                <th>gender</th>
                <th>umur</th>
                <th>tinggi badan</th>
                <th>berat badan</th>
                <th>hasil BMI</th>
                <th>ket.</th>
              </tr>
            </thead>  
            <tbody>
              <?php 
                $no = 1;
                foreach($ar_pasien as $isi):
              ?>
            <tr>
              <td><?= $no?></td>
              <td><?= $isi->tanggal?></td>
              <td><?= $isi->nama?></td>
              <td><?= $isi->gender?></td>
              <td><?= $isi->umur?></td>
              <td><?= $isi->tinggi?></td>
              <td><?= $isi->berat?></td>
              <td><?= $isi->nilaiBMI()?></td>
              <td><?= $isi->keterangan()?></td>
            </tr>
              <?php
                $no++; 
              endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
