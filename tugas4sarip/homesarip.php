<?php
include_once 'koneksisarip.php';
	if (isset($_GET['delete_id'])){
		$sql_query = "DELETE FROM mahasiswa WHERE id =".$_GET['delete_id'];
		mysql_query($sql_query);
		header("location: $_SERVER[PHP_SELF]");
	}
?>
<?php
session_start();
//periksa apakah user telah login atau memiliki session
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
?><script language='javascript'>alert('Anda belum login. Please login dulu');
document.location='indexsarip.php'</script>
<?php
} else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi CRUD</title>
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
<script>
	function edit_id(id){
		if(confirm('Yakin Ingin Mengedit..?')){
			window.location.href ='editsarip.php?edit_id='+id;
		}
	}
	
	function delete_id(id){
		if (confirm('Yakin Ingin Delete..?')){
			window.location.href = 'homesarip.php?delete_id='+id;
		}	
	}
</script>
</head>
<body>
<div class="Container">
<header>
	<h1>Operasi CRUD</h1>
</header>

<nav>
	<ul>
		<li><b>MENU</b></li>
		<li><a href="#">Menu 1</a></li>
		<li><a href="#">Menu 2</a></li>
		<li><a href="#">Menu 3</a></li>
	</ul>
</nav>

<article>
<table border="1" width="75%" align="center">
<tr>
<th><a href="tambahsarip.php"><button type="submit">+ tambah</button></a>
</th>
<th><a href="logoutsarip.php"><button type="submit">LOGOUT</button></a>
</th>
</tr>
<tr>
	<td>No</td>
	<td>NIM</td>
	<td>Nama</td>
	<td>Alamat</td>
	<td>Aksi</td>
</tr>
<?php
	$sql_query = "SELECT * FROM mahasiswa";
	$result_set = mysql_query($sql_query);
	
	if (mysql_num_rows($result_set) > 0){
		while ($row = mysql_fetch_row($result_set)){
			?>
			<tr>
			<td align="center"><?php echo $row[0]; ?></td>
			<td align="center"><?php echo $row[1]; ?></td>
			<td align ="center"><?php echo $row[2]; ?></td>
			<td align ="center"><?php echo $row[3]; ?></td>
			<td><a href="javascript:edit_id('<?php echo $row['0']; ?>')">EDIT</a>
			<a href="javascript:delete_id('<?php echo $row['0']; ?>')">DELETE</a></td>
			</tr>
			<?php
		}
	}
	else{
		?>
		<tr>
		<td colspan="5"> Data Tidak Ditemukan.</td>
		</tr>
		<?php
	}
	?>
		
	
</table>
</article>
<footer>#Sarip Hidayat - 14.111.227#</footer>
</div>
</body>
</html>
<?php } ?>