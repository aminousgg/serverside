<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Sipirang</title>
  <!-- Tell the browser to be responsive to screen width -->

  <?php $this->load->view('admin/componen/load-css'); ?>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- load header -->
  <?php
    $this->load->view('admin/componen/header-nav'); 
    $this->load->view('admin/componen/aside');
  ?>

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php
              if($page=="beranda"){
                echo '<h1 class="m-0 text-dark judul-konten">Beranda</h1>';
              }else{
                echo '<h1 class="m-0 text-dark judul-konten"></h1>';
              }
            ?>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- <div class="row">
        
        </div> -->
        <?php
            if($page=="beranda"){
              $this->load->view('admin/isi-beranda');
            }else{

            }
        ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    $this->load->view('admin/componen/footer');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php
  $this->load->view('admin/componen/load-js');
?>
<script>
  var page="<?= $page ?>";
  if(page=="beranda"){
    $("#beranda").attr('class', 'nav-link active');
  }else if(page=="barang"){
    $("#barang").attr('class', 'nav-link active');
  }else if(page=="anggota"){
    $("#anggota").attr('class', 'nav-link active');
  }else if(page=="pinjam"){
    $("#pinjam").attr('class', 'nav-link active');
  }else if(page=="kembali"){
    $("#kembali").attr('class', 'nav-link active');
  }else if(page=="record"){
    $("#record").attr('class', 'nav-link active');
  }

$( document ).ready(function() {
    var table;
    table = $('#coba').DataTable({
        "ajax"        : {
            "url"     : "<?= base_url('admin/coba'); ?>",
            "type"    : "POST",
        },
        "serverSide"  : true,
        "processing"  : true,
    });
});
</script>
</body>
</html>
