<?php
require_once 'koneksi.php';
require_once 'nbc_atribut.php';
require_once 'nbc_parameter.php';
require_once 'nbc_training.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LayaKerja - Dataset</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-text mx-3">layak<sup>erja</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="data_atribut.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Atribut</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="data_parameter.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Nilai Parameter</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="dataset.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Dataset</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Perhitungan
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="prediksi.php">
          <i class="fas fa-fw fa-calendar-alt"></i>
          <span>Prediksi</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <div><h1 class="h3 mb-0 text-gray-800">Dataset</h1></div>
          

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <p class="mb-4">Untuk menentukan data yang nantinya akan dianalisis dengan <strong>Metode Naive Bayes</strong> maka langkah yang pertama dilakukan adalah membaca data training.</p>

          <!-- DataTales Training-->
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Data Training</h6>
                <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Menu:</div>
                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#probe">Probabilitas dan Keakuratan</button>
                  </div>
                </div>
              </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Pekerja</th>
                  <?php 
                  
                  //-- menampilkan header table
                  for($i=2;$i<=$jml_atribut;$i++){ 
                      echo "<th>{$atribut[$i]}</th>";
                  }
                  ?>
                  <th><?php echo $atribut[1];?></th></tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Pekerja</th>
                      <?php
                    //-- menampilkan header table
                    for($i=2;$i<=$jml_atribut;$i++){ 
                      echo "<th>{$atribut[$i]}</th>";
                    }
                    echo "<th>{$atribut[1]}</th>";
                    ?>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                  $no=1;
                  //-- menampilkan data secara literal
                  foreach($data as $id_responden=>$dt_atribut){ ?>
                      <tr><td> <?= $no++; ?></td>
                      <?php
                      echo "<td>{$responden[$id_responden]}</td>";
                      for($i=2;$i<=$jml_atribut;$i++){ 
                          echo "<td>{$parameter[$i][$dt_atribut[$i]]}</td>";
                      }
                      echo "<td>{$parameter[1][$dt_atribut[1]]}</td></tr>";
                  }

                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; KOSAN 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

<!-- Modal -->
<div class="modal fade" id="probe" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Probabilitas dan Keakuratan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Jumlah data peratribut</h6>
          </div>
          <div class="card-body">
          <caption>TABEL 1 : Jumlah Data Kelas <?php echo $atribut[1];?></caption>
            <table border='1' class="mb-3 table table-striped">
              <tr><?php foreach($parameter[1] as $nilai=>$param){ echo "<th class='text-center'>{$param}</th>"; }?></tr>
              <tr><?php foreach($prior_freq as $nilai=>$nfreq){ echo "<td>{$nfreq}</td>"; }?></tr>
            </table>
            <?php 
            //-- menampilkan tabel frekuensi/jumlah data tiap atribut
            for($i=2;$i<=$jml_atribut;$i++){
                //-- caption tabel utk masing-masing atribut
                echo "<caption>TABEL ".($i)." : Jumlah Data Atribut {$atribut[$i]}</caption>";  
                echo "<table border='1' class='mb-3 table table-striped'>";
                echo "<tr><th rowspan='2' class='text-center'>{$atribut[1]}</th><th colspan='3' class='text-center'>{$atribut[$i]}</th></tr><tr>"; 
                //-- item nilai literal tiap atribut
                foreach($parameter[$i] as $nilai=>$param){ 
                    echo "<th class='text-center'>{$param}</th>"; 
                }
                echo "</tr>";
                //-- iterasi utk tiap nilai kelas
                foreach($parameter[1] as $n=>$p){
                    echo "<tr><td>{$p}</td>";
                    //-- iterasi jumlah data/freq tiap nilai atribut
                    for($j=0;$j<=2;$j++){
                    echo "<td>{$freq[$i][$j][$n]}</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            ?>
          </div>
        </div>


        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Probabilitas peratribut</h6>
          </div>
          <div class="card-body">
          <caption>TABEL 1 : Probabilitas Kelas <?php echo $atribut[1];?></caption>
          <table border='1' class="table table-striped table-responsive"> 
          <tr><?php foreach($parameter[1] as $nilai=>$param){ echo "<th class='text-center'>{$param}</th>"; }?></tr> 
          <tr><?php foreach($prior as $nilai=>$nprior){ echo "<td>{$nprior}</td>"; }?></tr> 
          </table>

          <?php 
          //-- menampilkan tabel probabilitas tiap atribut 
          for($i=2;$i<=$jml_atribut;$i++){ 
            //-- caption tabel utk masing-masing atribut 
            echo "<caption>TABEL ".($i)." : Probabilitas Atribut {$atribut[$i]}</caption>";
            echo "<table border='1' class='mb-3 table table-striped table-responsive'>"; 
            echo "<tr><th rowspan='2' class='text-center'>{$atribut[1]}</th><th colspan='3' class='text-center'>{$atribut[$i]}</th></tr><tr>"; 
            //-- item nilai literal tiap atribut 
            foreach($parameter[$i] as $nilai=>$param){  
                echo "<th class='text-center'>{$param}</th>";  
            } 
            echo "</tr>"; 
            //-- iterasi utk tiap nilai kelas 
            foreach($parameter[1] as $n=>$p){ 
                echo "<tr><td>{$p}</td>"; 
                //-- iterasi probabilitas tiap nilai atribut 
                for($j=0;$j<=2;$j++){ 
                    echo "<td>{$likehood[$i][$j][$n]}</td>"; 
                } 
                echo "</tr>"; 
            } 
            echo "</table>";          
          }     
          ?>
          </div>
        </div>

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Keakuratan Data Training</h6>
        </div>
        <div class="card-body">
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Correctly Classified Instance</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">
                      <?php
                      //-- menampilkan prosentase data training yg diprediksi benar
                      echo ($right/count($data)*100)."%";
                      ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Incorrectly Classified Instance</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">
                      <?php
                      //-- menampilkan prosentase data training yg diprediksi tidak benar
                      echo ((1-$right/count($data))*100)."%";
                      ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
