<div class="container mt-5 text-light">
  <div class="row justify-content-center">
    <div class="col-md-5 border border-light px-4 py-4 rounded shadow">

      <?php echo form_open('matkul/index'); ?>
      <div class="form-group">
        <label for="nim">Mata kuliah</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-500px"></i>
            </div>
          </div>
          <input id="nid" name="matkul" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="nama">Nama Dosen</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-book"></i>
            </div>
          </div>
          <input id="nama" name="dosen" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="ipk">Waktu</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-book"></i>
            </div>
          </div>
          <input id="ipk" name="waktu" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="ipk">SKS</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-check"></i>
            </div>
          </div>
          <input id="ipk" name="sks" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <button name="simpan" type="submit" class="btn btn-dark">Tambah</button>
      </div>
      <?php echo form_close(); ?>



    </div>
  </div>

</div>