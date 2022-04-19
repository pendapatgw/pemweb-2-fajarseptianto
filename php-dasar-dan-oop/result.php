<?php
  $nama = $_POST['nama'];
  $gender = $_POST['gender'];
  $umur = $_POST['umur'];
  $berat = $_POST['berat'];
  $tinggi = $_POST['tinggi'];
  $proses = $_POST['proses'];

  $ar_pasien = [$nama,$gender,$umur,$berat,$tinggi];
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
                <td>no</td>
                <td>nama</td>
                <td>gender</td>
                <td>umur</td>
                <td>tinggi badan</td>
                <td>berat badan</td>
              </tr>
            </thead>  
            <tbody>
            <?php 
              $no = 1;
              foreach($ar_pasien as $isi):
                
             ?>
             <tr>
              
                <td><?= $no?></td>
                <td><?= $nama?></td>
                <td><?= $gender?></td>
                <td><?= $umur?></td>
                <td><?= $berat?></td>
                <td><?= $tinggi?></td>
              </tr>
             <?php $no++;
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
