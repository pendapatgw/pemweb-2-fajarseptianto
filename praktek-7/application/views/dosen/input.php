<div class="container mt-5 text-light">
  <div class="row justify-content-center">
    <div class="col-md-5 border border-light px-4 py-4 rounded shadow">

      <?php echo form_open('dosen/index'); ?>
      <div class="form-group">
        <label for="nim">NID</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-500px"></i>
            </div>
          </div>
          <input id="nid" name="nid" type="text" class="form-control">
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
          <input id="nama" name="nama" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="laki-laki">
            <label for="gender_0" class="custom-control-label">L</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="perempuan">
            <label for="gender_1" class="custom-control-label">P</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal Lahir</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-adjust"></i>
            </div>
          </div>
          <input id="tanggal" name="tanggal" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="tempat">Tempat Lahir</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-anchor"></i>
            </div>
          </div>
          <input id="tempat" name="tempat" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="ipk">Mata Kuliah</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-book"></i>
            </div>
          </div>
          <input id="ipk" name="matkul" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="ipk">pendidikan</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-check"></i>
            </div>
          </div>
          <input id="ipk" name="pendidikan" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <button name="simpan" type="submit" class="btn btn-dark">Tambah</button>
      </div>
      <?php echo form_close(); ?>



    </div>
  </div>

</div>