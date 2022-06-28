<div class="container  d-flex flex-column align-items-center" id="mhs">
    <h1 class="text-light text-capitalize">data mahasiswa</h1>
    <a href="<?= base_url() ?>mahasiswa/create" class="btn btn-dark text-capitalize mb-2">tambah data</a>
    <div class="row w-75">
        <div class="col-12 ">
            <table class="table table-dark table-hover">
                <thead>
                    <tr class="text-center text-capitalize">
                        <td>no</td>
                        <td>nama mahasiswa</td>
                        <td>gender</td>
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
                            <td><?= $lls->gender; ?></td>
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