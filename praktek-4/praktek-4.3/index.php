<!-- ambil simbol $ < > + = _ - / * '"-->
<?php
require_once 'libmahasiswa.php';
$mahasiswa1= new Mahasiswa(01102,"ahmad","sistem informasi",2019,3.02);
$mahasiswa2= new Mahasiswa('03825',"herman","teknik informatika",'2017',2.9);
$mahasiswa3= new Mahasiswa(01673,"zhihan","teknik informatika",2020,3.9);
$mahasiswa4= new Mahasiswa(01167,"rojul","teknik informatika",2019,3.5);
$mahasiswa5= new Mahasiswa('01189',"didad","sistem informasi",'2019',3.59);

$kumpulan_mahasiswa = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4,$mahasiswa5];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <style>
      :root {
        --bs-blue: #0d6efd;
        --bs-indigo: #6610f2;
        --bs-purple: #6f42c1;
        --bs-pink: #d63384;
        --bs-red: #dc3545;
        --bs-orange: #fd7e14;
        --bs-yellow: #ffc107;
        --bs-green: #198754;
        --bs-teal: #20c997;
        --bs-cyan: #0dcaf0;
        --bs-white: #fff;
        --bs-gray: #6c757d;
        --bs-gray-dark: #343a40;
        --bs-gray-100: #f8f9fa;
        --bs-gray-200: #e9ecef;
        --bs-gray-300: #dee2e6;
        --bs-gray-400: #ced4da;
        --bs-gray-500: #adb5bd;
        --bs-gray-600: #6c757d;
        --bs-gray-700: #495057;
        --bs-gray-800: #343a40;
        --bs-gray-900: #212529;
        --bs-primary: #0d6efd;
        --bs-secondary: #6c757d;
        --bs-success: #198754;
        --bs-info: #0dcaf0;
        --bs-warning: #ffc107;
        --bs-danger: #dc3545;
        --bs-light: #f8f9fa;
        --bs-dark: #212529;
        --bs-primary-rgb: 13, 110, 253;
        --bs-secondary-rgb: 108, 117, 125;
        --bs-success-rgb: 25, 135, 84;
        --bs-info-rgb: 13, 202, 240;
        --bs-warning-rgb: 255, 193, 7;
        --bs-danger-rgb: 220, 53, 69;
        --bs-light-rgb: 248, 249, 250;
        --bs-dark-rgb: 33, 37, 41;
        --bs-white-rgb: 255, 255, 255;
        --bs-black-rgb: 0, 0, 0;
        --bs-body-color-rgb: 33, 37, 41;
        --bs-body-bg-rgb: 255, 255, 255;
        --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
        --bs-body-font-family: var(--bs-font-sans-serif);
        --bs-body-font-size: 1rem;
        --bs-body-font-weight: 400;
        --bs-body-line-height: 1.5;
        --bs-body-color: #212529;
        --bs-body-bg: #fff;
      }
      .card {
        background-color: var(--bs-gray-900);
      }
    </style>
    <title>Hello, world!</title>
  </head>
  <body class="bg-primary">
    <div class="container mt-5">
      <div class="card text-light">
        <div class="card-header">
          <h2 class="text-capitalize">sistem penilaian</h2>
        </div>
        <div class="card-body text-light">
          <div class="card-title">
            <h4 class="text-center text-capitalize">kartu studi mahasiswa</h4>
            <table class="table  text-capitalize text-light">
              <thead>
                <tr class="text-center">
                  <th >No</th><th >NIM</th><th >nama mahasiswa</th><th >prodi</th> <th>tahun angkatan</th> <th >ipk</th><th>predikat</th>
                </tr>
               
              </thead>
              <tbody>
              <?php
                        $nomor = 1;
                        foreach($kumpulan_mahasiswa as $mhs){
                            echo '<tr><td class="text-center">'.$nomor.'<br>';
                            echo '<td class="text-center">' .$mhs->nim . '</br>';
                            echo '<td class="text-center">' .$mhs->nama . '</br>';
                            echo '<td class="text-center">' .$mhs->prodi . '</br>';
                            echo '<td class="text-center">' .$mhs->thn_angkatan . '</br>';
                            echo '<td class="text-center">' .$mhs->ipk . '</br>';
                            echo '<td>' .$mhs->predikatipk() . '</td>';
                            echo '</tr>';
                            $nomor++;
                        }
                    ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
