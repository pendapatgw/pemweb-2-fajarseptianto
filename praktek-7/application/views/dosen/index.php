<div class="container   d-flex flex-column align-items-center" id="mhs">
    <h1 class="text-light text-center text-capitalize">data dosen</h1>
    <a href="<?= base_url() ?>dosen/create" class="btn btn-dark text-capitalize mb-2">tambah data</a>
    <div class="row w-100">
        <div class="col-12 ">
            <table class="table table-dark table-hover">
                <thead>
                    <tr class="text-center text-capitalize">
                        <td>no</td>
                        <td>nama dosen</td>
                        <td>nid</td>
                        <td>gender</td>
                        <td>mata kuliah</td>
                        <td>pendidikan</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($dosen as $dds) : ?>
                        <tr class="text-center text-capitalize">
                            <td><?= $no; ?></td>
                            <td><?= $dds->nama; ?></td>
                            <td><?= $dds->nid; ?></td>
                            <td><?= $dds->gender; ?></td>
                            <td><?= $dds->matkul; ?></td>
                            <td><?= $dds->pendidikan; ?></td>

                        </tr>
                    <?php $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>