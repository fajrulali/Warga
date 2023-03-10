<?php
    require 'koneksi.php';
    session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

        if (isset($_POST['submit'])) {
            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $gender = $_POST['gender'];
            $ttl = $_POST['ttl'];
            $dusun = $_POST['dusun'];
            $alamat = $_POST['alamat'];
            $pendidikan = $_POST['pendidikan'];
            $pekerjaan = $_POST['pekerjaan'];
            $gol_darah = $_POST['gol_darah'];
            $no_telp = $_POST['no_telp'];
            $status = $_POST['status'];
            $tm = $_POST['ttl_mulai'];

            $user = $_SESSION['username_akun'];

            $result= mysqli_query($conn, "SELECT id_akun FROM akun WHERE username_akun='$user'");
            $data = mysqli_fetch_array($result);

            $ha = $data['id_akun'];

            $simpanData = mysqli_query($conn, "UPDATE data_pendatang SET nama='$nama',agama='$agama',gender='$gender',ttl='$ttl',dusun='$dusun',alamat='$alamat',pendidikan='$pendidikan',pekerjaan='$pekerjaan',gol_darah='$gol_darah',no_telp='$no_telp',status='$status', ttl_mulai='$tm',id_akun='$ha' WHERE nik='$nik'");
            header("location: all_data_pendatang_super.php?update=success");
    }
?>