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

  <title>LayaKerja - Prediksi</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
      <li class="nav-item">
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
      <li class="nav-item active">
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
    <div id="content-wrapper" class="d-flex flex-column bg-white">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <div><h1 class="h3 mb-0 text-gray-800">Naive Bayes Classifier</h1></div>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p>Silahkan input data yang ingin diprediksi</p>
          </div>
        
        <div class="row">
        <div class="col">
            <form action="" method="POST" class="user">
                <div class="form-group row mb-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="responden" class="font-weight-bold">Nama Pekerja / Responden</label>
                        <input type="text" class="form-control" id="responden" name="responden" placeholder="boleh samaran..">
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="usia" class="font-weight-bold">Usia</label>
                        <select class="form-control" id="usia" name="usia">
                            <option value="0">Muda(< 30 tahun)</option>
                            <option value="1">Dewasa(30-40 tahun)</option>
                            <option value="2">Tua(> 40 tahun)</option>
                        </select>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                    <label for="merokok" class="font-weight-bold">Merokok</label>
                    <select class="form-control" id="merokok" name="merokok">
                        <option value="0">Tidak</option>
                        <option value="1">Ringan</option>
                        <option value="2">Berat</option>
                    </select>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                    <label for="kolesterol" class="font-weight-bold">Kolesterol</label>
                    <select class="form-control" id="kolesterol" name="kolesterol">
                        <option value="0">Normal(< 200mg/dL)</option>
                        <option value="1">Batas Tinggi(200-239mg/dL)</option>
                        <option value="2">Tinggi(>=240md/dL)</option>
                    </select>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                    <label for="asam_urat" class="font-weight-bold">Asam Urat</label>
                    <select class="form-control" id="asam_urat" name="asam_urat">
                        <option value="0">Rendah(< 2md/dL)</option>
                        <option value="1">Normal(2-8,5md/dL)</option>
                        <option value="2">Tinggi(> 8,5mg/dL)</option>
                    </select>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                    <label for="gula_darah" class="font-weight-bold">Gula Darah</label>
                    <select class="form-control" id="gula_darah" name="gula_darah">
                        <option value="0">Normal(< 108mg/dL)</option>
                        <option value="1">Prediabetes(108-125mg/dL)</option>
                        <option value="2">Diabetes(>= 126mg/dL)</option>
                    </select>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                    <label for="bmi" class="font-weight-bold">BMI</label>
                    <select class="form-control" id="bmi" name="bmi">
                        <option value="0">Kurus(< 18,5)</option>
                        <option value="1">Ideal(18,5-24,9)</option>
                        <option value="2">Gemuk(>= 25)</option>
                    </select>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="row mb-3">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button type="submit" name="prediksi" class="btn btn-primary btn-user btn-block">
                        Prediksi
                    </button>
                </div>
                <div class="col-sm-4"></div>
                </div>
            </form>
        </div>
        </div>
          
        <?php
            //-- menyiapkan variabel penampung data inputan
            if(@isset($_POST["prediksi"])) {
            $input=array();

            // //-- membuat data input simulasi dengan fungsi random untuk masing2 atribut
            // for($i=2;$i<=$jml_atribut;$i++){
            //     $input[$i]=rand(0,2);
            // } 

            $responden = $_POST["responden"];
            $input[2]= $_POST["usia"];
            $input[3]= $_POST["merokok"];
            $input[4]= $_POST["kolesterol"];
            $input[5]= $_POST["asam_urat"];
            $input[6]= $_POST["gula_darah"];
            $input[7]= $_POST["bmi"];

            $query = mysqli_query($db, "SELECT * FROM nbc_responden ORDER BY id_responden DESC LIMIT 1") ;
            $hasil = mysqli_fetch_array($query);
            
            $id_reponden = $hasil["id_responden"] + 1;
                
            $m=array();
            //-- iterasi utk setiap nilai kelas
            for($i=0;$i<3;$i++){
                //-- inisialisasi probabilitas awal
                $m[$i]=1;
                //-- perkalian nilai probabilitas tiap atribut
                for($j=2;$j<=$jml_atribut;$j++){
                    $m[$i]*=$likehood[$j][$input[$j]][$i];
                }
                //-- kalikan dengan prior probabilitasnya
                $m[$i]*=$prior[$i];
            }
            //-- menentukan prediksi nilai kelas, berdasar probabilitas terbesar
            $result=array_search(max($m),$m);

            // var_dump($id_reponden);
            
            mysqli_query($db, "INSERT INTO nbc_data VALUES ('', $id_reponden, 1, $result)");
            mysqli_query($db, "INSERT INTO nbc_data VALUES ('', $id_reponden, 2, $input[2])");
            mysqli_query($db, "INSERT INTO nbc_data VALUES ('', $id_reponden, 3, $input[3])");
            mysqli_query($db, "INSERT INTO nbc_data VALUES ('', $id_reponden, 4, $input[4])");
            mysqli_query($db, "INSERT INTO nbc_data VALUES ('', $id_reponden, 5, $input[5])");
            mysqli_query($db, "INSERT INTO nbc_data VALUES ('', $id_reponden, 6, $input[6])");
            mysqli_query($db, "INSERT INTO nbc_data VALUES ('', $id_reponden, 7, $input[7])");

            mysqli_query($db, "INSERT INTO nbc_responden VALUES ($id_reponden, '$responden')") or die(mysqli_error($db));
            //-- menampilkan hasil prediksi nilai kelas
            $s_list=array();
            foreach($input as $i=>$n){
                $s_list[]="<b>{$atribut[$i]}</b>=<i>{$parameter[$i][$n]}</i>";
            }
            ?>
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Hasil Prediksi</h6>
            </div>
            <div class="card-body"> 
                <?php
                
                echo "Untuk ".implode(' , ',$s_list)."<br> Masuk ke kelas <b>{$atribut[1]}</b>=<i>{$parameter[1][$result]}</i> ";
                echo "<br>Dengan probabilitas sebesar <b>{$m[$result]}</b> ";   ?>
            </div>
            </div>
        <?php
            
        }  
        ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; KOSAN 2020</span>
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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
