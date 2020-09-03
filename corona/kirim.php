<?php
if($_POST['kirim']){
	$admin = 'faizn103a@gmail.com'; //ganti email dg email admin (email penerima pesan)

	$nama	= htmlentities($_POST['nama']);
	$email	= htmlentities($_POST['email']);
	$judul	= htmlentities($_POST['judul']);
	$pesan	= htmlentities($_POST['pesan']);

$dari	= 'Surat Dari: '.$nama.'alamat Emailnya: '.$email.':)';

	if(mail($admin, $judul, $pesan, $dari)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="corona.php">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href=corona.php">Kembali</a>';
	}
}else{
	header("Location: index.html");
}
?>
