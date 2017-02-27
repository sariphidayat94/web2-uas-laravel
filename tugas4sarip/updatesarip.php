<?php

if(isset($_POST['simpan'])){
	

	include('koneksisarip.php');
	
	$id			= $_POST['id'];	
	$nim		= $_POST['nim'];	
	$nama		= $_POST['nama'];	
	$alamat		= $_POST['alamat'];	
	
	
	
	$update = mysql_query("UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat' WHERE id='$id'") or die(mysql_error());
	
	
	if($update){
		
		echo 'Data berhasil di simpan! ';
		header("location:homesarip.php");	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="editsarip.php?edit_id='.$id.'">Kembali</a>';	
		
	}

}else{	

	
	echo '<script>window.history.back()</script>';

}
?>