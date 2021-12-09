

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Prediksi Panen</title>

    <!-- Custom fonts for this template-->
    <link href="Vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sistem Prediksi Pangan</h1>
                                    </div>
                                    <form action="index.php" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                               aria-describedby="emailHelp" name="nama" 
                                                placeholder="Enter username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"    aria-describedby="emailHelp"
                                                placeholder="Enter Password...">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <input class="btn btn-primary " type="submit" value="Submit" name="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>

            </div>

        </div>
            
    </div>
 
    <!-- Bootstrap core JavaScript-->
    <script src="Vendor/jquery/jquery.min.js"></script>
    <script src="Vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php

if (isset($_POST['Submit'])) {
    include 'connect.php';
   

$nama = $_POST['nama'];
$password = $_POST['password'];
$login = mysqli_query($koneksi, "SELECT * FROM login WHERE nama = '$nama' and password ='$password'");
$cek = mysqli_num_rows($login);
if ($cek>0) {
    # code...
    header('Location: index1.php');
}
else{
    header('Location: index.php');
}


}/* isset */


 ?>