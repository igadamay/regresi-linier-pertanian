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
    <link href="Vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
     <link href="Vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php include 'js/file.php';?>
            <div class="container-fluid">
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="h5 mb-0 text-gray-800">Tambah Data Pangan</h5>
                    </div>
                <!-- isi -->
                <div class="col-lg-7">

                	<form action="aksi_tambahdata.php" method="post" >
                               
                                <div class="form-group">
                                    <input type="number" name="No" class="form-control form-control-user"  
                                        placeholder="Id Pangan" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Tahun" class="form-control form-control-user"  
                                        placeholder="Tahun" required>
                                </div>
                                <div class="form-group">
                                	 <select class="form-control" name="Jenis_Tanaman" required>
                                        <option value="">Jenis Tanaman</option>
                                        <option name ="Jenis_Tanaman" value="Ubi jalar">Ubi Jalar</option>
                                        <option name="Jenis_Tanaman" value="Padi">Padi</option>
                                        <option name ="Jenis_Tanaman" value="jagung">Jagung</option>
                                </select>
                                </div>
                                <div class="form-group">
                                	<select class="form-control" name="Kabupaten_kota" required>
                                        <option value="">Kabupaten / Kota</option>
                                        <option name ="Kabupaten_kota" value="Kabupaten Cilacap">Kabupaten Cilacap</option>
                                        <option name="Kabupaten_kota" value="Kabupaten Banyumas">Kabupaten Banyumas</option>
                                        <option name ="Kabupaten_kota" value="Kabupaten Kebumen">Kabupaten Kebumen</option>
                                </select>
                                </div>
                                <hr>
                                <label>Penulisan nominal tanpa menggunakan titik</label>
                                <div class="form-group">
                                	 <input type="number" name="Luas_Panen" class="form-control form-control-user"  
                                        placeholder="Luas Panen" required>
                                </div>
                                 <div class="form-group">
                                	 <input type="number" name="Provitas" class="form-control form-control-user"  
                                        placeholder="Provitas" required>
                                </div>
                                <div class="form-group">
                                	 <input type="number" name="Produksi" class="form-control form-control-user" 
                                        placeholder="Produksi" required>
                                </div>
                                <input class="btn btn-primary btn-user btn-block" type="submit" value="submit" name="<?php echo $value;?>"/>
                            </form>

                </div><!-- col lg -->  
        	</div> <!-- continer fluid-->

                <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
                 </a>
                    <!-- Content Row -->

    <!-- Bootstrap core JavaScript-->
    <script src="Vendor/jquery/jquery.min.js"></script>
    <script src="Vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="Vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
