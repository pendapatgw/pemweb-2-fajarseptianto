<?php
// ambil simbol $
require_once 'ingredient.php';
$persegipanjang1 = new persegipanjang(12,20);
$persegipanjang2 = new persegipanjang(16,30);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center text-capitalize">luas dan keliling persegi panjang</h1>
    <div class="container text-center bg-primary text-light text-capitalize">
      <p>ini adalah persegi panjang 1</p>
      <p>
        luasnya adalah
        <?php echo $persegipanjang1->cariluas()?>
      </p>
      <p>
        kelilingnya adalah
        <?php echo $persegipanjang1->carikeliling()?>
      </p>
      <p>ini adalah persegi panjang 2</p>
      <p>
        luasnya adalah
        <?php echo $persegipanjang2->cariluas()?>
      </p>
      <p>
        kelilingnya adalah
        <?php echo $persegipanjang2->carikeliling()?>
      </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
