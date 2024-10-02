<section class="content-header">
    <h1>
        <?= $title ?>
    </h1><br>

</section>

<div class="row">
    <div class="col sm-12">
    <table class=" table-striped table-responsive">
            <tr>
                <th rowspan="5"><img src="<?= base_url('fotomhs/'.$mhs['foto_mhs']) ?>" padding="5px"width="170px"height="170px"alt="">  </th>
                <th width="140px">NIM</th>
                <th width="20px">:</th>
                <th>  <?= $mhs['nim']?>  </th>
                <th rowspan="5"></th>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>  <?= $mhs['nama_mhs']?>  </td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>:</td>
                <td>  <?= $mhs['fakultas']?>  </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td><?= $mhs['proddi']?></td>
            </tr>
            
        
    </table>
    </div>
    <br>
    <div class="col sm-12">
        
        <button class="btn btn-sm btn-flat btn-primary" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>Tambah Mata Kuliah</button>
        <a href="<?=base_url('krs/print')?>"target="_blank"class="btn btn-sm btn-flat btn-warning"><i class="fa fa-print"></i>Cetak KRS</a>
    </div>
    <div class="col sm-12">
        <br>
        <?php if (session()->getFlashdata('pesan')) {
                echo'<div class = "alert alert-success" role="alert">';
                echo session()->getFlashdata('pesan');
                echo'</div>';
                }
        ?>
    </div>
    <div class="col sm-12">
        <table class="table table-striped table-bordered table-responsive">
            <tr class="label-success">
                <th>#</th>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>Semester</th>
                <th>SKS</th>
                <th>Kategori</th>
                <th></th>
            </tr>
            <?php $no=1;foreach ($data_matkul as $key => $value) {?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$value['kode_matkul']?></td>
                    <td><?=$value['mata_kuliah']?></td>
                    <td><?=$value['smt']?>-<?=$value['semester']?></td>
                    <td><?=$value['sks']?></td>
                    <td><?=$value['kategori']?></td>
                    <td class="text-center">
                        <button class="btn btn-danger btn-flat btn-xs"data-toggle="modal" data-target="#delete<?=$value['id_krs_']?>"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

<!-- /.modal add matkul-->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Daftar Mata Kuliah yang Ditawarkan</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped text-sm" id="example1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>Semester</th>
                            <th>SKS</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1;foreach ($matkul_ditawarkan as $key => $value){?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$value['kode_matkul']?></td>
                            <td><?=$value['mata_kuliah']?></td>
                            <td><?=$value['smt']?>-<?=$value['semester']?></td>
                            <td><?=$value['sks']?></td>
                            <td><?=$value['kategori']?></td>
                            <td>
                                <a href="<?=base_url('krs/tambah_matkul/'.$value['id_matkul'])?>"class="btn btn-success btn-xs btn-flat"><i class="fa faplus"></i>Add</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
               

            </div>
            
            
        </div>
    <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- modal delete -->

<?php foreach ($data_matkul as $key => $value) { ?>
    <div class="modal fade" id="delete<?=$value['id_krs_'] ?>">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete <?= $title?></h4>
                </div>
                <div class="modal-body">
                   Apakah anda yakin ingin menghapus <b><?= $value['kode_matkul']?>|<?= $value['mata_kuliah']?> .?</b>?

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('krs/delete/' . $value['id_krs_'])?>" class="btn btn-success btn-flat">Delete</a>
                </div>

            </div>
        <!-- /.modal-content -->
        </div>
    <!-- /.modal-dialog -->
    </div>

     
 <?php } ?>