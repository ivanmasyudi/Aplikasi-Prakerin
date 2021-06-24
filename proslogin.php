<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from tbllogin where user='$username' and pass='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['login'] = true;
		$_SESSION['nama_user'] = $data['nama_user'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:page/admin/index.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="guru"){
		// buat session login dan username
		$_SESSION['login'] = true;
		$_SESSION['nama_user'] = $data['nama_user'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "guru";
		// alihkan ke halaman dashboard pegawai
		header("location:page/guru/index.php");

	// cek jika user login sebagai pengurus
	}else if($data['level']=="siswa"){
		// buat session login dan username
		$_SESSION['login'] = true;
		$_SESSION['nama_user'] = $data['nama_user'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
		// alihkan ke halaman dashboard pengurus
		header("location:page/siswa/index.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
}else{
	header("location:index.php?pesan=gagal");
}

?>