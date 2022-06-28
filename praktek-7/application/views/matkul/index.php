<div class="container   d-flex flex-column align-items-center">
    <h1 class="text-light text-capitalize">data mata kuliah</h1>
    <a href="<?=base_url()?>matkul/create" class="btn btn-dark text-capitalize mb-2">tambah data</a>
    <div class="row w-75">
        <div class="col-75 ">
            <table class="table table-dark table-hover">
                <thead>
                    <tr class="text-center text-capitalize">
                        <td>no</td>
                        <td>nama matkul</td>
                        <td>dosen</td>
                        <td>durasi</td>
                        <td>bobot sks</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($matkul as $mms) : ?>
                        <tr class="text-center text-capitalize">
                            <td><?= $no; ?></td>
                            <td><?= $mms->matkul; ?></td>
                            <td><?= $mms->dosen; ?></td>
                            <td><?= $mms->waktu; ?></td>
                            <td><?= $mms->sks; ?></td>

                        </tr>
                    <?php $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>