<?php
     include 'connect.php';
      
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
    <link href="Vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
     <link href="Vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php include 'js/file.php';?>
            <div class="container-fluid">

                   <!-- isi -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4 class="h4 mb-0 text-gray-800">Data Pangan Kabupaten Kendal</h4>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                     <div class="row no-gutters align-items-center">

                                 <div class="col mr-2">
                                 <form class="user"  method="post" action="prediksi_kendal.php">
                                 <div class="form-group m-2">
                                    <label>Peramalan untuk tahun berikutnya</label>
                                 <select class="form-control" name="tahun" required>
                                        <option value="">Tahun</option>
                                        <option name ="tahun" value="1">1</option>
                                        <option name="tahun" value="2">2</option>
                                        <option name ="tahun" value="3">3</option>
                                        <option name="tahun" value="4">4</option>
                                        <option name ="tahun" value="5">5</option>
                                </select>
                                </div>
                                <div class="form-group m-2">
                                 <select class="form-control" name="jenis_pangan" required>
                                        <option value="">Jenis Pangan</option>
                                        <option name ="jenis_pangan" value="Ubi jalar">Ubi Jalar</option>
                                        <option name="jenis_pangan" value="Padi">Padi</option>
                                        <option name ="jenis_pangan" value="jagung">Jagung</option>
                                </select>
                                </div>
                                </div><!-- end form peramaan-->

                                        <div class="col-auto">     
                                    <input class="btn btn-primary btn-block" type="submit" value="submit" name="<?php echo $value;?>"/>
                                        </div>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                        </div> 

                        <!-- Pending Requests Card Example -->
                        <div class=" col-lg-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="tambah_data.php" class="btn btn-info btn-icon-split">
                                        <span class="text">Tambah Data</span>
                                    	</a>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--- isi -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tables Pangan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-gray-800" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>Jenis Pangan</th>
                                            <th>Kabupaten Kota</th>
                                            <th>Luas panen</th>
                                            <th>Provitas</th>
                                            <th>Produksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php 
                                 $no = 1;
                                 $data = mysqli_query($koneksi,"select * from db_kendal");
                                 while($d = mysqli_fetch_array($data)){
                            ?>
                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['Tahun']; ?></td>
                            <td><?php echo $d['Jenis_Tanaman']; ?></td>
                            <td><?php echo $d['Kabupaten_kota']; ?></td>
                            <td><?php echo $d['Luas_Panen']; ?></td>
                            <td><?php echo $d['Provitas']; ?></td>
                            <td><?php echo $d['Produksi']; ?></td>
                            <td>
                                <a href="hapus_kendal.php?No=<?php echo $d['No']; ?>">DELETE</a></td>
                            </tr>
                              <?php 
                                    }
                                   
                                 ?>

                                    </tbody>
                                     </table>
                            </div>
                        </div>
                    </div>
                  
        </div>

                <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
                 </a>
                    <!-- Content Row -->

    <script src="Vendor/jquery/jquery.min.js"></script>
    <script src="Vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="Vendor/chart.js/Chart.min.js"></script>
    <script src="Vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="Vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

</body>
</html>
