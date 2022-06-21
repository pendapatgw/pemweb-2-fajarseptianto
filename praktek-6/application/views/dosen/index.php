<div class="container" id="mhs" style="height:100vh ;">
    <h1 class="text-light text-center text-capitalize">data dosen</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 ">
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