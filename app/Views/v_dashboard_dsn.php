<div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-success">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive pad" src="<?=base_url('fotodosen/'.$dosen['foto_dosen'])?>" >

              <h3 class="profile-username text-center"><?=$dosen['nidn']?></h3>
              <h3 class="profile-username text-center"><?=$dosen['nama_dosen']?></h3>

            </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
    </div>

    <div class="col-md-9">
    <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Biodata Mahasiswa</h3>
            </div>
            <div class="box-body">
                <table class="table table-responsive">
                    <tr>
                        <th>Kode Dosen</th>
                        <th>:</th>
                        <th><?=$dosen['kode_dosen']?></th>
                    </tr>
                    <tr>
                        <th>Tempat Tanggal Lahir</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Pendidikan terakhir</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>E-Mail</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                </table>
            </div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    
    </div>

</div>