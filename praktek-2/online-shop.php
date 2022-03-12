<?php
$proses = $_POST["proses"];
$namaPelanggan = $_POST["customer"];
$produk = $_POST["produk"];
$jmlBeli = $_POST["jml_beli"];


$total;
                    if ($produk == "TV") {
                        $total = $jmlBeli * 4200000;
                    } elseif ($produk == "Kulkas") {
                        $total = $jmlBeli * 3100000;
                    } elseif ($produk == "Mesin Cuci") {
                        $total = $jmlBeli * 3800000;
                    } else {
                        $total;
                    }
                
                    $totalBelanja = number_format($total);


                    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>
  <body>
    <section class="body">
      <div class="container">
        <div class="row my-4">
          <div class="col">
            <h1 class="display-5">Belanja Online</h1>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-6">
            <form method="post" action="online-shop.php">
              <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                  <input id="text" name="customer" placeholder="Nama Customer" type="text" class="form-control" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4">Pilih Produk</label>
                <div class="col-8">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV" />
                    <label for="radio_0" class="custom-control-label">TV</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas" />
                    <label for="radio_1" class="custom-control-label">Kulkas</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci" />
                    <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                  <input id="text1" name="jml_beli" placeholder="Jumlah" type="text" class="form-control" />
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 mb-5 order-lg-2 order-1 shadow-md">
            <ul class="list-group">
              <li class="list-group-item active" aria-current="true">Daftar Harga</li>
              <li class="list-group-item">TV : 4.200.000</li>
              <li class="list-group-item">Kulkas : 3.100.000</li>
              <li class="list-group-item">Mesin Cuci : 3.800.000</li>
              <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
            </ul>
          </div>
        </div>
        <div class="bawah">
        <?php
        echo "
                        <div class='bg-primary w-75 rounded-2 text-white p-2 mt-4 mb-3 shadow-md'>
                            Nama Customer : {$namaPelanggan}<br/>
                            Produk Pilihan : {$produk}<br/>
                            Jumlah Beli : {$jmlBeli}<br/>
                            Total Belanja : Rp.{$totalBelanja}<br/>
                        </div>
                        ";?>
        </div>
      </div>
    </section>

    <!-- scrip js bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
