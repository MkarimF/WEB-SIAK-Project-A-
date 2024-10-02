<section class="content-header">
    <h1>
        <?= $title ?>
    </h1><br>

</section>

<div class="row">
    <div class="col-sm12">
        <div class="box box-warning box-solid">
        

            <div class="box-body">
                <table class="table tale-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th width="50px" class="text-center">No</th>
                            <th>Fakultas</th>
                            <th>Kode Prodi</th>
                            <th>Program Studi</th>
                            <th class="text-center">Jenjang</th>
                            <th class="text-center">Mata Kuliah</th>
                            <th width="150px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $db     = \Config\Database::connect();
                    
                    $no = 1;
                    foreach ($prodi as $key => $value) {
                        $jumlah = $db->table('tbl_matkul')
                        ->where('id_prodi',$value['id_prodi'])
                        ->countAllResults();
                    ?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $value['fakultas']?></td>
                            <td><?= $value['kode_prodi']?></td>
                            <td><?= $value['proddi']?></td>
                            <td class="text-center"><?= $value['jenjang']?></td>
                            <td class="text-center">
                                <p class="label text-center bg-aqua"><?= $jumlah?></p>
                            </td>
                            <td class="text-center">
                                
                                <a href="/matkul/detail/<?= $value['id_prodi']?>" 
                                class="btn btn-success btn-sm btn-flat">
                                <i class="fa fa-th-list"> Mata Kuliah</i>
                                </a>
                                
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>