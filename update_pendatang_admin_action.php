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
            $id_dusun = $_POST['id_dusun'];
            $rw = $_POST['rw'];
            $rt = $_POST['rt'];
            $pendidikan = $_POST['pendidikan'];
            $pekerjaan = $_POST['pekerjaan'];
            $gol_darah = $_POST['gol_darah'];
            $status = $_POST['status'];
            $tgl_pindah = $_POST['tgl_pindah'];

            $user = $_SESSION['username_akun'];

            $result= mysqli_query($conn, "SELECT id_akun FROM akun WHERE username_akun='$user'");
            $data = mysqli_fetch_array($result);

            $ha = $data['id_akun'];

            $simpanData = mysqli_query($conn, "UPDATE data_penduduk SET nama='$nama',agama='$agama',gender='$gender',ttl='$ttl',
			id_dusun='$id_dusun',rw='$rw',rt='$rt',pendidikan='$pendidikan',pekerjaan='$pekerjaan',gol_darah='$gol_darah',
			status='$status', tgl_pindah='$tgl_pindah',id_akun='$ha' WHERE nik='$nik'");
            
			if($simpanData){
				header("location: all_data_pendatang_admin.php?update=success");
			}
	}
?>