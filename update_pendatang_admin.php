<?php
    session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

    require('koneksi.php');

    $nik = $_GET['nik'];
    $dataUbah = mysqli_query($conn, "SELECT * FROM data_penduduk WHERE nik='$nik'");

    $data = mysqli_fetch_assoc($dataUbah);
?>

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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom logo -->
    <link rel="icon" href="">

<!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
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
        .img{
            background-image: url("img/a.jpg");

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary samping sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard_admin.php">
                <div class="sidebar-brand-icon">
                    <img src="img/Logo.png" class="img-logo">
                </div>
                <div class="sidebar-brand-text mx-3 text">Pendataan Penduduk</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard_admin.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Fitur
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="view_all_data_admin.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Penduduk</span></a>
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
                <nav class="navbar navbar-expand navbar-light img bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    <h4  style="margin-left: 32%; margin-top: 1%;"> D E S A  &nbsp;&nbsp; K A R A N G S U W U N G</h4>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username_akun']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Update Data Pendatang</h1>

                    <form autocomplete="off" required="" method="POST" action="update_pendatang_admin_action.php">
                        <div class="card-body">
                            <br>
                            <div class="form-group">
                                <label for="exampleInputId" class="input">NIK</label>
                                <input type="number" class="form-control input" id="exampleInputNama" required="" name="nik" value="<?php echo $data['nik']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNik" class="input">Nama</label>
                                <input type="text" class="form-control input" id="exampleInputNik" required="" name="nama" min="0" value="<?php echo $data['nama']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama" class="input">Agama</label>
                                <select class="form-control input" id="sel1" name="agama" id="exampleInputAgama">
                                    <option value="Islam" <?php if ($data['agama']=='Islam'){echo 'selected';}?>>Islam</option>
                                    <option value="Kristen" <?php if ($data['agama']=='Kristen'){echo 'selected';}?>>Kristen</option>
                                    <option value="Hindu" <?php if ($data['agama']=='Hindu'){echo 'selected';}?>>Hindu</option>
                                    <option value="Buddha" <?php if ($data['agama']=='Buddha'){echo 'selected';}?>>Buddha</option>
                                    <option value="Katholik" <?php if ($data['agama']=='Katholik'){echo 'selected';}?>>Katholik</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputGender" class="input">Gender</label>
                                <select class="form-control input" id="sel1" name="gender" id="exampleInputGender">
                                    <option value="L" <?php if ($data['gender']=='L'){echo 'selected';}?>>Laki - laki</option>
                                    <option value="P" <?php if ($data['gender']=='P'){echo 'selected';}?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTtl" class="input">TTL</label>
                                <input type="date" class="form-control input" id="exampleInputRt" required="" name="ttl" min="0" value="<?php echo $data['ttl']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDusun" class="input">Dusun</label>
								<select class="form-control input" name="id_dusun">
									<option value="1" <?php if ($data['id_dusun']=='1'){echo 'selected';}?>>Dusun 1</option>
                                    <option value="2" <?php if ($data['id_dusun']=='2'){echo 'selected';}?>>Dusun 2</option>
                                    <option value="3" <?php if ($data['id_dusun']=='3'){echo 'selected';}?>>Dusun 3</option>
                                    <option value="4" <?php if ($data['id_dusun']=='4'){echo 'selected';}?>>Dusun 4</option>
									<option value="5" <?php if ($data['id_dusun']=='5'){echo 'selected';}?>>Dusun 5</option>
                                    <option value="6" <?php if ($data['id_dusun']=='6'){echo 'selected';}?>>Dusun 6</option>
								</select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAlamat" class="input">RW</label>
                                <select class="form-control input" name="rw">
									<option required="" value="1" <?php if ($data['rw']=='1'){echo 'selected';}?>>RW 01</option>
                                    <option required="" value="2" <?php if ($data['rw']=='2'){echo 'selected';}?>>RW 02</option>
                                    <option required="" value="3" <?php if ($data['rw']=='3'){echo 'selected';}?>>RW 03</option>
                                    <option required="" value="4" <?php if ($data['rw']=='4'){echo 'selected';}?>>RW 04</option>
									<option required="" value="5" <?php if ($data['rw']=='5'){echo 'selected';}?>>RW 05</option>
								</select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNo" class="input">RT</label>
                                <select class="form-control input" name="rt">
									<option required="" value="1" <?php if ($data['rt']=='1'){echo 'selected';}?>>RT 01</option>
                                    <option required="" value="2" <?php if ($data['rt']=='2'){echo 'selected';}?>>RT 02</option>
                                    <option required="" value="3" <?php if ($data['rt']=='3'){echo 'selected';}?>>RT 03</option>
                                    <option required="" value="4" <?php if ($data['rt']=='4'){echo 'selected';}?>>RT 04</option>
									<option required="" value="5" <?php if ($data['rt']=='5'){echo 'selected';}?>>RT 05</option>
								</select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPendidikan" class="input">Pendidikan</label>
                                <input type="text" class="form-control input" id="exampleInputAgama" required="" name="pendidikan" min="0" value="<?php echo $data['pendidikan']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPekerjaan" class="input">Pekerjaan</label>
                                <input type="text" class="form-control input" id="exampleInputAkun" required="" name="pekerjaan" min="0" value="<?php echo $data['pekerjaan']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputGol" class="input">Gol Darah</label>
                                <select class="form-control input" id="sel1" name="gol_darah" id="exampleInputGol">
                                    <option value="A" <?php if ($data['gol_darah']=='A'){echo 'selected';}?>>A</option>
                                    <option value="B" <?php if ($data['gol_darah']=='B'){echo 'selected';}?>>B</option>
                                    <option value="AB" <?php if ($data['gol_darah']=='AB'){echo 'selected';}?>>AB</option>
                                    <option value="O" <?php if ($data['gol_darah']=='O'){echo 'selected';}?>>O</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputStatus" class="input">Status</label>
                                <select class="form-control input" id="sel1" name="status" id="exampleInputGender">
                                    <option value="Menikah" <?php if ($data['status']=='Menikah'){echo 'selected';}?>>Menikah</option>
                                    <option value="Belum Menikah" <?php if ($data['status']=='Belum Menikah'){echo 'selected';}?>>Belum Menikah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTtlMulai" class="input">TTL Mulai</label>
                                <input type="date" class="form-control input" id="exampleInputTtlMulai" required="" name="tgl_pindah" min="0" value="<?php echo $data['tgl_pindah']; ?>" >
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary submit" name="submit">Submit</button>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kantor Desa Karangsuwung</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika anda ingin keluar dari halaman ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="action_logout.php">Logout</a>
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

</body>

</html>