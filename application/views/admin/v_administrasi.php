<!-- Tahun Ajaran -->
<?php
    $query=$this->db->query("SELECT * FROM tbl_thn_ajaran ORDER BY thn_id limit 1");
    $tahun=$query->row();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ponpes Ash-Sholihah | Download</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php
    $this->load->view('admin/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php 
   $this->load->view('admin/v_sidebar');
   ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <h1>
        Data Administrasi
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Administrasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:10px;">
                <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">NIS</th>
                    <th rowspan="2">Nama</th>
                    <th rowspan="2">Semester</th>
                    <th rowspan="2">Tahun Ajaran</th>
                    <th colspan="12" style="text-align: center;">Administrasi Bulanan</th>
                    <th rowspan="2" style="text-align: right;">Input</th>
                </tr>
                <tr>
                  <th>Jan</th>
                  <th>Feb</th>
                  <th>Mar</th>
                  <th>Apr</th>
                  <th>Mei</th>
                  <th>Jun</th>
                  <th>Jul</th>
                  <th>Agu</th>
                  <th>Sep</th>
                  <th>Okt</th>
                  <th>Nov</th>
                  <th>Des</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $semester=$tahun->thn_semester;
                  $tahun_awal=$tahun->thn_awal;
                  $tahun_akhir=$tahun->thn_akhir;
                    $no=0;
                    foreach ($data->result_array() as $i) :
                       $no++;
                       $id=$i['siswa_id'];
                       $nis=$i['siswa_nis'];
                       $nama=$i['siswa_nama'];
                       $jenkel=$i['siswa_jenkel'];
                       $jan=$i['januari'];
                       $feb=$i['februari'];
                       $mar=$i['maret'];
                       $apr=$i['april'];
                       $mei=$i['mei'];
                       $jun=$i['juni'];
                       $jul=$i['juli'];
                       $ags=$i['agustus'];
                       $sep=$i['september'];
                       $okt=$i['oktober'];
                       $nov=$i['november'];
                       $des=$i['desember'];

                    ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $nis ?></td>
                  <td><?php echo $nama ?></td>
                  <td><?php echo $semester; ?></td>
                  <td><?php echo $tahun_awal." / ".$tahun_akhir; ?></td>
                  <td><?php if ($jan==NULL):?>
                    
                    <?php elseif ($jan=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($feb==NULL):?>
                    
                    <?php elseif ($feb=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($mar==NULL):?>
                    
                    <?php elseif ($mar=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($apr==NULL):?>
                    
                    <?php elseif ($apr=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($mei==NULL):?>
                    
                    <?php elseif ($mei=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  
                  <td><?php if ($jun==NULL):?>
                    
                    <?php elseif ($jun=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($jul==NULL):?>
                    
                    <?php elseif ($jul=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($ags==NULL):?>
                    
                    <?php elseif ($ags=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($sep==NULL):?>
                    
                    <?php elseif ($sep=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($okt==NULL):?>
                    
                    <?php elseif ($okt=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($nov==NULL):?>
                    
                    <?php elseif ($nov=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($des==NULL):?>
                    
                    <?php elseif ($des=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  
                  <td style="text-align:right;">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>" ><span class="fa fa-pencil"> Input</span></a>
                       
                  </td>
                </tr>
              <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php 
  $this->load->view('admin/v_footer')
 ?>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


                 <?php
                 $tahun_id=$tahun->thn_id;
                    foreach ($data->result_array() as $i) :
                      $kode=$i['adm_id'];
                       $id=$i['siswa_id'];
                       $nis=$i['siswa_nis'];
                       $nama=$i['siswa_nama'];
                       $jenkel=$i['siswa_jenkel'];
                       $jan=$i['januari'];
                       $feb=$i['februari'];
                       $mar=$i['maret'];
                       $apr=$i['april'];
                       $mei=$i['mei'];
                       $jun=$i['juni'];
                       $jul=$i['juli'];
                       $ags=$i['agustus'];
                       $sep=$i['september'];
                       $okt=$i['oktober'];
                       $nov=$i['november'];
                       $des=$i['desember'];

                 ?>
  <!--Modal Edit Aadministrasi Bulanan-->
        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Input Syahriah</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/administrasi/simpan_adm/'.$id;?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <input type="hidden" name="kode2" value="<?php echo $kode;?>"/>
                       <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                       <input type="hidden" name="tahun" value="<?php echo $tahun_id;?>">

                            <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">NIS</label>
                            <div class="col-sm-7">
                              <input type="text" name="xnis" value="<?php echo $nis;?>" class="form-control" id="inputUserName" placeholder="NIP" readonly>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                            <div class="col-sm-7">
                              <input type="text" name="xnama" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="NIP" readonly>
                             </div>
                      </div>
                      <hr>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Januari</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($jan=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="jan" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="jan" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="jan" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="jan" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Februari</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($feb=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="feb" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="feb" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="feb" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="feb" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Maret</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($mar=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="mar" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="mar" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="mar" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="mar" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">April</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($apr=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="apr" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="apr" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="apr" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="apr" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Mei</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($mei=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="mei" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="mei" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="mei" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="mei" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Juni</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($jun=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="jun" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="jun" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="jun" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="jun" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Juli</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($jul=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="jul" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="jul" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="jul" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="jul" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Agustus</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($ags=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="ags" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="ags" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="ags" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="ags" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">September</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($sep=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="sep" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="sep" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="sep" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="sep" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Oktober</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($okt=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="okt" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="okt" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="okt" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="okt" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">November</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($nov=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="nov" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="nov" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="nov" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="nov" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Desember</label>
                             <div class="col-sm-7" align="right">
                              <?php if ($des=='1'):?>
                               <label class="radio-inline"><input type="radio"  name="des" value='1' checked>Lunas</label>
                                <label class="radio-inline"><input type="radio" name="des" value='0'>Belum Lunas</label>
                                <?php else: ?>
                                <label class="radio-inline"><input type="radio"  name="des" value='1' >Lunas</label>
                                <label class="radio-inline"><input type="radio" name="des" value='0' checked>Belum Lunas</label>
                              <?php endif; ?>
                             </div>
                      </div>
                      
                      


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Input</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
         <?php endforeach;?>


 



<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "responsive": true,
      "info": true,
      "autoWidth": false
    });

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $(".timepicker").timepicker({
      showInputs: true
    });

  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                Swal.fire({
                        icon: 'warning',
                        title: 'Gagal Menmbah Data',
                        text: ' data Telah Ada',
                      });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
                  <script type="text/javascript">
                Swal.fire({
                        icon: 'success',
                        title: 'Berhasil Menmbah Data',
                        text: 'Data Administrasi Berhasil Ditambah',
                      });
        </script>
        <?php elseif($this->session->flashdata('msg')=='success-update'):?>
                  <script type="text/javascript">
                Swal.fire({
                        icon: 'success',
                        title: 'Berhasil Menmbah Data',
                        text: 'Administrasi Berhasil Ditambah',
                      });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus-kelas'):?>
           <script type="text/javascript">
                Swal.fire({
                        icon: 'success',
                        title: 'Data Terhapus',
                        text: 'Data Kelas Telah Terhapus',
                      });
        </script>
  
    <?php else:?>

    <?php endif;?>
</body>
</html>
