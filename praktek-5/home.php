<?php
require_once "header.php";
require_once "footer.php";
require_once "dataakun.php";
?>


<body>
    <h1 class="text-capitalize text-center">data nasabah</h1>
    <div class="container">
        <div class="form text-capitalize">
            <form method="POST">
                <div class="form-group">
                    <label for="text">nama nasabah</label>
                    <input id="text" name="nanas" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="text1">nomor rekening</label>
                    <input id="text1" name="noreknas" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="text2">jumlah saldo terakhir</label>
                    <input id="text2" name="salnas" type="text" class="form-control" />
                </div>
                
                <div class="form-group">
                    <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

        <table class="table table-hover table-dark text-capitalize">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>nomor rekening</th>
                    <th>saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(isset($_POST['simpan']))
                $no = 1;
                foreach ($nasabah as $obj) : ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj->pelanggan; ?></td>
                        <td><?php echo $obj->nomor; ?></td>
                        <td><?php echo $obj->dapatkanSaldo(); ?></td>

                    </tr>
                <?php $no++;
                endforeach; ?>
            </tbody>
        </table>
    </div>