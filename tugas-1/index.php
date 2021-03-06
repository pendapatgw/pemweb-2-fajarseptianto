<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BMI - mengukur dan menilai kesehatan anda</title>
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- link form builder -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- personal css -->
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <section id="homepage" class="bg-primary">
      <h1 class="text-center text-light">BMI Calculate</h1>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-6 form">
                <form method="POST" action="./result.php">
                  <!-- text-area 1 nama -->
                  <div class="form-group">
                    <label for="text">Nama</label>
                    <input id="text" name="nama" type="text" class="form-control" />
                  </div>
                  <!-- end text area 1 -->

                  <!-- radiabutton 1 -->
                  <div class="form-group row">
                    <label class="col-4">Gender :</label>
                    <div class="col-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="Laki-Laki" />
                        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="Perempuan" />
                        <label for="radio_1" class="custom-control-label">Perempuan</label>
                      </div>
                    </div>
                  </div>
                  <!-- end radiabutton 1 -->

                  <!-- text area 2 -->
                  <div class="form-group">
                    <label for="umur">Umur</label>
                    <input id="umur" name="umur" type="text" class="form-control" />
                  </div>
                  <!-- end text area 2 -->

                  <!-- select area 1 -->
                  <div class="form-group">
                    <label for="berat-badan">Berat Badan</label>
                    <div>
                      <input type="number" name="berat" id="berat-badan" class="form-control" />
                      <span id="tinggi-badanHelpBlock" class="form-text text-muted">Dalam hitungan KG </span>
                    </div>
                  </div>
                  <!-- end select area 1 -->
                  <!-- select area 2 -->
                  <div class="form-group">
                    <label for="tinggi-badan">Tinggi Badan</label>
                    <div>
                      <input type="number" name="tinggi" id="tinggi-badan" class="form-control" />
                      <span id="tinggi-badanHelpBlock" class="form-text text-muted">Dalam hitungan CM</span>
                    </div>
                  </div>
                  <!-- end select area 2 -->
                  <!-- submit button -->
                  <div class="form-group">
                    <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  <!-- end submit button -->
                </form>
              </div>
              <div class="col-6 image">
                <img src="assets/weight.jpg" alt="weight" width="100%" height="100%" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
