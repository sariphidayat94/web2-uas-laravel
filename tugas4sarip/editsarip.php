<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi CRUD</title>
</head>

<body>
<style>
div.container {
	width:100px;
	border: 1px solid gray;
}
header, footer {
	padding: 1em;
	color:#FFFFFF;
	background-color:gray;
	clear:left;
	text-align :center;
}
nav {
	float:left; 
	max-width: 160px;
	margin:0;
	padding:1em;
}
nav ul {
	list-style-type:none;
	padding:0;
}
nav ul a{
	text-decoration:none;
}
artitle {
	margin-left:170px;
	border-left:1px solid gray;
	padding:1em;
	overflow:hidden;
}
</style>
</head>
<body>
<div class="Container">
<header>
	<h1>Operator CRUD</h1>
</header>

<nav>
	<ul>
		<li><b>MENU</b></li>
		<li><a href="#">Menu 1</a></li>
		<li><a href="#">Menu 2</a></li>
		<li><a href="#">Menu 3</a></li>
	</ul>
</nav>
<?php
	
	include('koneksisarip.php');
	$id = $_GET['edit_id'];
	$show = mysql_query("SELECT * FROM mahasiswa WHERE id='$id'");
	if(mysql_num_rows($show) == 0){
		
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
<form action="updatesarip.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id ; ?>">
<table border="1" width="60%" align="center">
<tr>
<th><align ="center" colspan="2">Edit data</th>
</tr>
<tr>
	<td>Nama</td>
	<td><Input style="text" name="nama" size="80" value ="<?php echo $data['nama']; ?>"></td>
</tr>
<tr>
	<td>NIM</td>
	<td><input type=" text" name="nim" size="80" value ="<?php echo $data ['nim']; ?>"></td>
</tr>
<tr>
	<td>Alamat</td>
	<td><input type=" text" name="alamat" size="80" value ="<?php echo $data ['alamat']; ?>"></td>
</tr>
<td colspan="2" align="right"><input type="submit" name="simpan" value="Simpan" /></td>
</tr>
</table>
</form>
</article>
<footer>#Sarip Hidayat - 14.111.227#</footer>
</div>
</body>
</html>
