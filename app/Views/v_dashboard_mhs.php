<div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-success">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive pad" src="<?=base_url('fotomhs/'.$mhs['foto_mhs'])?>" >

              <h3 class="profile-username text-center"><?=$mhs['nim']?></h3>
              <h3 class="profile-username text-center"><?=$mhs['nama_mhs']?></h3>

              <p class="text-muted text-center"><?=$mhs['proddi']?></p>
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
                        <th>Fakultas</th>
                        <th>:</th>
                        <th><?=$mhs['fakultas']?></th>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <th>:</th>
                        <th><?=$mhs['proddi']?></th>
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
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3></h3>

              <p>Kartu Rencana Studi</p>
              <br>
            </div>
            <div class="icon">
              <i class="fa   fa-graduation-cap"></i>
            </div>
            <a href="<?=base_url('krs')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    
    </div>

</div>