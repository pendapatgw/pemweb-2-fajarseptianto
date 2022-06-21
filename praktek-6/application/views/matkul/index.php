<div class="container" id="mhs" style="height:100vh ;">
    <h1 class="text-light text-center text-capitalize">data mata kuliah</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
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