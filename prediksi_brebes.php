<?php 
include 'connect.php';
	  

$tahun = $_POST['tahun'];
$jenis_pangan = $_POST['jenis_pangan'];
 $y_ak = 0;
$no = 0;
$jum_x1y  = 0;      $total_x1y  = 0; 
$jum_x2y = 0;      $total_x2y = 0;
$jum_x1x2 = 0;     $total_x1x2 = 0;
$total_x1 = 0;     $total_y = 0;
$total_x2 = 0;     $total_x1k = 0;
$total_x2k =0;     $total_yk = 0;
$jum_x1k =0;        $jum_x2k=0; 
$jum_yk=0;


if ($jenis_pangan == "Ubi jalar"){
   $data = mysqli_query($koneksi, "SELECT * FROM db_brebes WHERE Jenis_Tanaman = 'Ubi Jalar'");
   $dataakurasi = mysqli_query($koneksi, "SELECT * FROM db_brebes WHERE Jenis_Tanaman = 'Ubi Jalar'");                         
	}

elseif ($jenis_pangan == 'Padi') {
     $data = mysqli_query($koneksi, "SELECT * FROM db_brebes WHERE Jenis_Tanaman = 'Padi'");
       $dataakurasi = mysqli_query($koneksi, "SELECT * FROM db_brebes WHERE Jenis_Tanaman = 'Padi'");                          
    }
elseif ($jenis_pangan == "jagung") {
      $data = mysqli_query($koneksi, "SELECT * FROM db_brebes WHERE Jenis_Tanaman = 'Jagung'");
       $dataakurasi = mysqli_query($koneksi, "SELECT * FROM db_brebes WHERE Jenis_Tanaman = 'Jagung'");
        }    

else{
	header('Location: cari_tabel.php');

}

 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="Vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/buatpdfbrebes.js"></script>
</head>
    <link href="Vendor/datatables/dataTables.bootstrap4.min.css" rel="styl
<body id="page-top">
<?php include 'js/file.php';?>
            <div class="container-fluid">
            <!-- ISI -->

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                         <a target="_blank" rel="nofollow" href="data_grobogan.php">&rarr; Lihat Data Brebes</a>
                         <button id="downloadbrebes" class="btn shadow-sm btn-primary text-light font-weight-bold btn-sm text-left">Export PDF</button>
            </div>

             <div class="row ">
             <div class="col-xl-8 col-lg-7">
             <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold  text-primary">Data Tables <?php echo "$jenis_pangan"; ?> Kabupaten Brebes</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered  text-gray-900" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>X1</th>
                                            <th>X2</th>
                                            <th>Y</th>
                                            <th>X1 Y</th>
                                            <th>X2 Y</th>
                                            <th>X1 X2</th>
                                            <th>X1^2</th>
                                            <th>X2^2</th>
                                            <th>Y^2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php 
                                 while($colom = mysqli_fetch_array($data)){
                                     
                                    $no++;
                                    $x=0;
                                    $Luas_Panen=$colom[4];
                                    $Provitas=$colom[5];
                                    $Produksi=$colom[6]; 

                                    $jum_x1y  = $Luas_Panen * $Produksi;
                                    $jum_x2y = $Provitas * $Produksi;
                                    $jum_x1x2 = $Luas_Panen *$Provitas;

                                    $jum_x1k = pow($Luas_Panen, 2);
                                    $jum_x2k = pow($Provitas, 2);
                                    $jum_yk = pow($Produksi, 2);

                                    $total_x1 = $total_x1 + $Luas_Panen;   
                                    $total_x2 = $total_x2 + $Provitas;
                                    $total_y = $total_y + $Produksi;
                                    $total_x1y  =$total_x1y  + $jum_x1y ;
                                    $total_x2y = $total_x2y +$jum_x2y;
                                    $total_x1x2 = $total_x1x2 + $jum_x1x2;
                                    $total_x1k =$total_x1k + $jum_x1k;
                                    $total_x2k = $total_x2k +$jum_x2k;
                                    $total_yk = $total_yk + $jum_yk;

                                    ///akurasi
                                    
                                    
                            ?>
                            <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $colom['Tahun']; ?></td>
                            <td><?php echo $colom['Luas_Panen']; ?></td>
                            <td><?php echo $colom['Provitas']; ?></td>
                            <td><?php echo $colom['Produksi']; ?></td>
                            <td><?php echo $jum_x1y ; ?></td>
                            <td><?php echo $jum_x2y; ?></td>
                            <td><?php echo $jum_x1x2; ?></td>
                            <td><?php echo $jum_x1k; ?></td>
                            <td><?php echo $jum_x2k; ?></td>
                            <td><?php echo $jum_yk; ?></td>
                            </tr>
                              <?php 
                                    }

                                  $reg_x1k = $total_x1k-(pow($total_x1, 2)/$no);
                                    $reg_x2k = $total_x2k-(pow($total_x2, 2)/$no);

                                    $reg_y = $total_yk-(pow($total_y, 2)/$no);
                                    $reg_x1y  = $total_x1y -(($total_x1*$total_y)/$no);

                                    $reg_x2y = $total_x2y-(($total_x2*$total_y)/$no);
                                    $reg_x1x2= $total_x1x2-(($total_x1*$total_x2)/$no);

                                    $b1 =(($reg_x2k*$reg_x1y -$reg_x1x2*$reg_x2y)/($reg_x1k*$reg_x2k- pow($reg_x1x2, 2))); 
                                    $b2 =(($reg_x1k*$reg_x2y-$reg_x1x2*$reg_x1y )/($reg_x1k*$reg_x2k- pow($reg_x1x2, 2)));

                                    $a=(($total_y/$no)-$b1*($total_x1/$no)-$b2*($total_x2/$no));
                                    $y = $a+$b1*($total_x1)+$b2*($total_x2);
                                    
                                    $total_b1 = number_format($b1,2);
                                    $total_b2 = number_format($b2,2);
                                    $total_a = number_format($a,2);
                                    $total_y = number_format($y,2);

                                     
                                    ?>

                            <tr class="bg-primary text-gray-300">
                            <td colspan="2">Jumlah</td>
                            <td align="right"><?php echo $total_x1; ?></td>
                            <td align="right"><?php echo $total_x2; ?></td>
                            <td align="right"><?php echo $total_y; ?></td>
                            <td align="right"><?php echo $total_x1y ; ?></td>
                            <td align="right"><?php echo $total_x2y; ?></td>
                            <td align="right"><?php echo $total_x1x2; ?></td>
                            <td align="right"><?php echo $total_x1k; ?></td>
                            <td align="right"><?php echo $total_x2k; ?></td>
                            <td align="right"><?php echo $total_yk; ?></td>
                        </tr>
                        </tbody>
                    </table>
                            </div>
                        </div>
                    </div>
                    </div>
                     <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4" id="buatpdfbrebes">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Hasil Prediksi <?php echo "$jenis_pangan"; ?> </h6>
                                  
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <?php 
                               
                                    echo "
                                    <bold><h4> Coefficients</h4></bold><br>

                                    X variabel 1 = $total_b1
                                    <br>
                                    X variabel 2 = $total_b2 <br>
                                    Intercept = $total_a <br>
                                    Y = $total_y <br>
                                    <br>
                                    ";
                                        $x_tahun =0;
                                         $tahun = $_POST['tahun'];
                                         $x_tahun = $x_tahun + $tahun;
                                         $yhasil = $a+$b1*($x_tahun)+$b2*($x_tahun);
                                         $total_yhasil = number_format($yhasil,2);
                                    echo "Prediksi Penjualan untuk $tahun tahun berikutnya adalah $total_yhasil";
                                       
                                     ?>

                                   

                                    <!--/isi-->
                                </div>
                            </div>
                        </div>

                 </div><!-- end Row-->

            <div class="col-xl-8 col-lg-7">
             <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold  text-primary">Data Akurasi RMSE <?php echo "$jenis_pangan"; ?> Kabupaten Brebes</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered  text-gray-900" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>X1</th>
                                            <th>X2</th>
                                            <th>Y</th>
                                            <th>Y'</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php 
                            $urutan = 0;
                                 while($colom = mysqli_fetch_array($dataakurasi)){
                                     
                                    $urutan++;
                                    $Luas_Panen=$colom[4];
                                    $Provitas=$colom[5];
                                    $Produksi=$colom[6];  

                                    $jum_x1y  = $Luas_Panen * $Produksi;
                                    $jum_x2y = $Provitas * $Produksi;
                                    $jum_x1x2 = $Luas_Panen *$Provitas;

                                    $y_ak =0;
                                    $yak_x1 = $b1 * $Luas_Panen;
                                    $yak_x2 = $b2 * $Provitas;

                                    $y_ak = $a + $yak_x1 + $yak_x2;
                                    ///akurasi
                                    
                            ?>
                            <tr>
                            <td><?php echo $urutan; ?></td>
                            <td><?php echo $colom['Tahun']; ?></td>
                            <td><?php echo $colom['Luas_Panen']; ?></td>
                            <td><?php echo $colom['Provitas']; ?></td>
                            <td><?php echo $colom['Produksi']; ?></td>
                            <td><?php echo $y_ak; ?></td>
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
                </div> <!-- end continer fluid -->
                <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
                 </a>
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