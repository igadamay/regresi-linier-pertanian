<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prediksi Pertanian</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
     <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
     <title>Prediksi Pertanian</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    
<?php include 'js/file.php';?>

                <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-2 font-weight text-gray-800">Prediksi Data Pangan</h4>
                        <form class="d-none d-sm-inline-block form-inline mr-right ml-md-3 my-2 my-md-0 mw-100  navbar-search" action="aksi.php" method="post">
                        <div class="input-group">
                            <select class="form-control" name="kabupaten">
                                        <option value="">Cari Kabupaten / Kota</option>
                                        <option name ="kabupaten" value="cilacap">Cilacap</option>
                                        <option name="kabupaten" value="banyumas">Banyumas</option>
                                        <option name ="kabupaten" value="purbalingga">Purbalingga</option>
                                        <option name="kabupaten" value="banjanegara">Banjarnegara</option>
                                        <option name="kabupaten" value="kebumen">Kebuman</option>
                                        <option name="kabupaten" value="purworejo">Purworejo</option>
                                        <option name="kabupaten" value="wonosobo">Wonosobo</option>
                                        <option name="kabupaten" value="magelang">Magelang</option>
                                        <option name ="kabupaten" value="boyolali">Boyolali</option>
                                        <option name="kabupaten" value="klaten">Klaten</option>
                                        <option name ="kabupaten" value="sukoharjo">Sukoharjo</option>
                                        <option name="kabupaten" value="wonogiri">Wonogiri</option>
                                        <option name="kabupaten" value="karanganyar">Karanganyar</option>
                                        <option name="kabupaten" value="Rembang">Sragen</option>
                                        <option name="kabupaten" value="pati">Pati</option>
                                        <option name="kabupaten" value="jepara">Jepara</option>
                                        <option name="kabupaten" value="grobogan">Grobogan</option>
                                        <option name="kabupaten" value="kendal">Kendal</option>
                                        <option name="kabupaten" value="brebes">Brebes</option>
                                        <option name="kabupaten" value="kudus">Kudus</option>
                                        <option name="kabupaten" value="Demak">Demak</option>
                                        <option name="kabupaten" value="semarang">Semarang</option>
                                        <option name="kabupaten" value="batang">Batang</option>
                                        <option name="kabupaten" value="Pekalongan">Pekalongan</option>
                                        <option name="kabupaten" value="tegal">Tegal</option>
                                </select>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="Submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
            </div>

                 <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Data Kabupaten Cilacap</div>
                                            <a href="data_cilacap.php" class="btn shadow-sm btn-primary text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Banyumas</div>
                                            <a href="data_banyumas.php" class="btn shadow-sm btn-info text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Data Kabupaten Grobogan</div>
                                            <a href="data_grobogan.php" class="btn shadow-sm btn-success text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Kendal</div>
                                            <a href="data_kendal.php" class="btn shadow-sm btn-warning text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4"> <!-- primary-->
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Data Kabupaten wonosobo</div>
                                            <a href="data_wonosobo.php" class="btn shadow-sm btn-primary text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Banjarnegara</div>
                                            <a href="data_banjarnegara.php" class="btn shadow-sm btn-info text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Magelang</div>
                                            <a href="data_magelang.php" class="btn shadow-sm btn-success text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Purworejo</div>
                                            <a href="data_purworejo.php" class="btn shadow-sm btn-warning text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- warning-->

                         <div class="col-xl-3 col-md-6 mb-4"> <!-- primary-->
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Data Kabupaten Purbalingga</div>
                                            <a href="data_purbalingga.php" class="btn shadow-sm btn-primary text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Data Kabupaten Boyolali</div>
                                            <a href="data_boyolali.php" class="btn shadow-sm btn-info text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Klaten</div>
                                            <a href="data_klaten.php" class="btn shadow-sm btn-success text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Sukoharjo</div>
                                            <a href="data_sukoharjo.php" class="btn shadow-sm btn-warning text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- warning-->

                        <div class="col-xl-3 col-md-6 mb-4"> <!-- primary-->
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Data Kabupaten Wonogiri</div>
                                            <a href="data_wonogiri.php" class="btn shadow-sm btn-primary text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Data Kabupaten Karanganyar</div>
                                            <a href="data_karanganyar.php" class="btn shadow-sm btn-info text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Sragen</div>
                                            <a href="data_sragen.php" class="btn shadow-sm btn-success text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Blora</div>
                                            <a href="data_blora.php" class="btn shadow-sm btn-warning text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- warning-->
                        <div class="col-xl-3 col-md-6 mb-4"> <!-- primary-->
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Data Kabupaten Pati</div>
                                            <a href="data_pati.php" class="btn shadow-sm btn-primary text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Data Kabupaten Rembang</div>
                                            <a href="data_rembang.php" class="btn shadow-sm btn-info text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Jepara</div>
                                            <a href="data_jepara.php" class="btn shadow-sm btn-success text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-gray-800  text-uppercase mb-1">Data Kabupaten Brebes</div>
                                            <a href="data_brebes.php" class="btn shadow-sm btn-warning text-light font-weight-bold btn-sm text-left">Lihat Data</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- warning-->
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

               

        </div> <!-- continer -->

                <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
                 </a>
                    <!-- Content Row -->

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

    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

