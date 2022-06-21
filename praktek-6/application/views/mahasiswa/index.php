<div class="container" id="mhs" style="height:100vh ;">
    <h1 class="text-light text-center text-capitalize">data mahasiswa</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <table class="table table-dark table-hover">
                <thead>
                    <tr class="text-center text-capitalize">
                        <td>no</td>
                        <td>nama mahasiswa</td>
                        <td>nim</td>
                        <td>ipk</td>
                        <td>predikat</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mhs as $lls) : ?>
                        <tr class="text-center text-capitalize">
                            <td><?= $no; ?></td>
                            <td><?= $lls->nama; ?></td>
                            <td><?= $lls->nim; ?></td>
                            <td><?= $lls->ipk; ?></td>
                            <td><?= $lls->predikat(); ?></td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>