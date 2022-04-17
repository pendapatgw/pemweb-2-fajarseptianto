<?php
require_once 'class-calculate.php';
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
    <link rel="stylesheet" href="result.css" />
    <!-- ends here -->
  </head>
  <body>
    <section id="homepage" class="bg-primary">
      <div class="container text-light">
        <h1 class="text-capitalize">berhasil</h1>
        <p class="text-capitalize">data yang berhasil kami dapat ialah</p>
        <p class="text-capitalize">nama kamu adalah... <?php echo $nama ?></p>
        <p class="text-capitalize">gender... <?php echo $gender ?></p>
        <p class="text-capitalize">umur kamu .... <?php echo $umur ?></p>
        <p class="text-capitalize">berat kamu adalah... <?php echo $beratBadan ?></p>
        <p class="text-capitalize">tinggi kamu adalah...<?php echo $tinggiBadan ?></p>

        <table class="table table-dark table-hover">
        <thead><tr>
          <th>no</th>
          <th>nama</th>
          <th>kode</th>
          <th>umur</th>
          <th>tinggi badan</th>
          <th>berat badan</th>
          <th>hasil kalkulasi</th>
        </thead>
        <tbody>
          <?php $nomor = 1;
            foreach($batch as $data){
              echo '<tr><td>'.$nomor.'</br>';
              echo '<td>' . $data['nama'] . '</br>';
              echo '<td>' . $data['umur'] . '</br>';
              echo '<td>' . $data['tb'] . '</br>';
              echo '<td>' . $data['bb'] . '</br>';
            $nomor++; 
           }
            
          ?>
        
        </tbody>
      </table>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
