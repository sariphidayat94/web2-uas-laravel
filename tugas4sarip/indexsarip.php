<?php 
session_start();
if(isset($_POST['login'])){
include "koneksisarip.php";
$query=mysql_query("SELECT * FROM login WHERE username='$_POST[username]' and password='$_POST[password]'");
$row=mysql_num_rows($query);
if($row==1){
$_SESSION['username']=($_POST['username']);
$_SESSION['password']=($_POST['password']);
?>
<script language="javascript">alert('Anda Berhasil Login');document.location="homesarip.php"</script>
<?php
}else{
?>
<script language="javascript">alert('Anda Gagal Login, Silakan Cek User/Password Anda atau Silakan Daftar Terlebih Dahulu');document.location="indexsarip.php"</script>
<?php
}
}
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
</head>
<body background="testweb/image/steel2.jpg">
<div class="Container">
<header>
	<h1>Operasi CRUD</h1>
</header>
<article>
<tr>
</tr>
<tr>
	
	<form method ="post">
	<table width="60&"
	align="center">
	
	<tr valign="top">
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" /></td>
	</tr>
	<tr valign="top">
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password" /></td>
	</tr>
	<tr valign="top">
		<td></td>
		<td></td>
		<td align="right"><input type="submit" name="login" value="LOGIN" /></td>
	</tr>
</table>
</form>
</article>
<footer>#Sarip Hidayat - 14.111.227#</footer>
</div>
</div>
</body>
</html>