<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LitleSiak | Print KRS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>/template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>/template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/template/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
            <i class="fa fa-download"></i><b>Kartu Rencana Studi</b>
            <small class="pull-right">Date:<?=date('d M Y')?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
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
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
         <table class="table table-striped table-bordered table-responsive">
            <tr class="label-success">
                <th>#</th>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>Semester</th>
                <th>SKS</th>
                <th>Kategori</th>
                
            </tr>
            <?php $no=1;foreach ($data_matkul as $key => $value) {?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$value['kode_matkul']?></td>
                    <td><?=$value['mata_kuliah']?></td>
                    <td><?=$value['smt']?>-<?=$value['semester']?></td>
                    <td><?=$value['sks']?></td>
                    <td><?=$value['kategori']?></td>
                    
                </tr>
            <?php } ?>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

   
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
