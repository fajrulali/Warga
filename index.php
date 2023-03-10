<?php  require ('koneksi.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pendataan Penduduk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom logo -->
    <link rel="icon" href="">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .para {
            text-indent: 45px;
            text-align: justify;
        }
        .img-size{
            max-width: 100%;
            height: 430px;
        }
        .img-logo{
            width: 45px;
            height: 45px;
        }
        .t{
            padding-bottom: 130px;
        }
        .T{
            padding-bottom: 35px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
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

                    &nbsp;&nbsp;&nbsp;
                    <img src="img/Logo.png" class="img-logo">
                    &nbsp;&nbsp;&nbsp;&nbsp; 
                    <span>D E S A  &nbsp;&nbsp; K A R A N G S U W U N G</span>
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow mx-1" style="margin-top: 3% ;">
                            <!-- Topbar Search -->
                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="pencarian.php" method="POST" autocomplete="off">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari berdasarkan NIK . . . ." aria-label="Search" aria-describedby="basic-addon2" name="inputnik" required="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" name="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
                    
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow mx-1" >
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#logoutModal">
                                <i class="fas fa-power-off fa-fw"></i>
                                &nbsp; Login
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                    </div> -->
                    

                    <div class="row">

                        <div class="col-xl-8">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Profil Desa</h6>
                                </div>
                                <div class="card-body t">
                                    <div class="chart-area">
                                    <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                            <img class="d-block w-100 img-size" alt="Responsive image" src="img/profil.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                            <img class="d-block w-100 img-size" alt="Responsive image" src="img/profil2.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                            <img class="d-block w-100 img-size" alt="Responsive image" src="img/profil3.jpg" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                            <img class="d-block w-100 img-size" alt="Responsive image" src="img/profil4.jpg" alt="Four slide">
                                            </div>
                                            <div class="carousel-item">
                                            <img class="d-block w-100 img-size" alt="Responsive image" src="img/profil5.jpg">
                                            </div>
                                            <div class="carousel-item">
                                            <img class="d-block w-100 img-size" alt="Responsive image" src="img/profil6.jpg" alt="Third slide">
                                            </div>
                                        </div>

                                        <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Informasi Desa</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body T">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <br>
                                        <br>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i>&nbsp; Jumlah Penduduk
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i>&nbsp; Penduduk (Tetap)
                                        </span>
                                        <br>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i>&nbsp; Penduduk (Pendatang)
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-warning"></i>&nbsp; Kepala Keluarga
                                        </span>
                                        <br>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-danger"></i>&nbsp; Penduduk (Pindah)
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-secondary"></i>&nbsp; Jumlah Dusun
                                        </span>
                                        <br>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-light"></i>&nbsp; Jumlah RW
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-dark"></i>&nbsp; Jumlah RT
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        
						<!-- Earnings (Monthly) Card Example -->
                        
                        <!-- Earnings (Monthly) Card Example -->
                        
                        <!-- Earnings (Monthly) Card Example -->
                        
                        <!-- Pending Requests Card Example -->
                        
						<!-- Pending Requests Card Example -->

						
                    </div>

                    <div class="space_d">
                        <div class="div1">
                            <table class="tabel2" border="0">
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="a3">
                                        <div>
                                            <center>
                                                <div class="alert alert-dark alert-dismissible div1">
                                                    <p class="para">
                                                    Desa Karuni Desa Karuni merupakan salah satu desa tertua di Kecamatan Loura-Kabupaten Sumba Barat Daya, Propinsi Nusa Tenggara Timur (NTT). 
                                                    Desa ini berdiri tahun 1965 dengan kepala desa pertama Y. M. Geli. Sampai dengan saat ini Desa Karuni telah mengalami 7 (tujuh) kali pergantian kepala desa. 
                                                    Dalam peta lama pulau Sumba, Karuni sudah ada walaupun belum sebagai sebuah desa.
                                                    </p>
                                                </div>
                                            </center>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">

                                            <div class="col-lg-6">

                                                <!-- Dropdown Card Example -->
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3 flex-row align-items-center justify-content-between bg-primary">
                                                        <h6 class="m-0 font-weight-bold text-light">Visi</h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <p class="para">
                                                            “Terwujudnya Desa Karangsuwung yang aman, sehat, cerdas, berdaya saing, 
															berbudaya dan berahlaq mulia”.
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-lg-6">

                                                <!-- Dropdown Card Example -->
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3  flex-row align-items-center justify-content-between bg-primary">
                                                        <h6 class="m-0 font-weight-bold text-light">Misi</h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <ul>
                                                            <li style="text-align: justify;">
                                                                Mengupayakan kesejahteraan para petani, pedagang, dan warga 
																masyarakat melalui program Kelompok Usaha Bersama.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Memberikan jaminan pendidikan dan kesehatan bagi masyarakat yang tidak mampu.
                                                            </li>
                                                            <li style="text-align: justify;">
																Pemerataan pembangunan.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Transparansi atau keterbukaan Anggaran Desa.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Menghapuskan pungli.
                                                            </li>
                                                            
                                                            <li style="text-align: justify;">
                                                                Pelelangan Tanah Titisara secara umum dan terbuka.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
										
					
							
					
					
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
					
					



                    <div class="space_d">
                    </div>

                    <div class="space_d">
                    </div>

                    <div class="space_d">
                    </div>

                    <div class="space_d">
                    </div>


                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                   
                  
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <!-- <span>Copyright &copy; Kantor Desa KARUNI</span> -->
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

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title kelas_login" id="exampleModalLabel">
                            Login
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off" action="action_login.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" name="submit">Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
        <script>
        <?php
            $penduduk = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_penduduk WHERE riwayat='Hidup' "));
            $tetap = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_penduduk WHERE kategori='Tetap' AND riwayat='Hidup' "));
            $pendatang = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_penduduk WHERE kategori='Pendatang' AND riwayat='Hidup' "));
            $kepala = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_kepala_keluarga WHERE riwayat='Hidup' "));
            $pindah = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_penduduk_pindah WHERE riwayat='Hidup' "));
            $dusun = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM dusun"));
        ?>
            var ctx = document.getElementById("myPieChart");
            var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Jumlah Penduduk", "Penduduk (Tetap)", "Penduduk (Pendatang)", "Kepala Keluarga", "Penduduk (Pindah)", "Jumlah Dusun", "Jumlah RW", "Jumlah RT"],
                datasets: [{
                data: [<?=$penduduk?> , <?=$tetap?>, <?=$pendatang?>, <?=$kepala?>, <?=$pindah?>, <?=$dusun?>, 5, 5],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796', '#f8f9fc', '#5a5c69'],
                // hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                },
                legend: {
                display: false
                },
                cutoutPercentage: 80,
            },
            });
        </script>

</body>

</html>