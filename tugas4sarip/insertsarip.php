<?php
include_once 'koneksisarip.php';
$NIM = $_POST['nim'];
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$query = mysql_query("INSERT INTO `Mahasiswa` (`id`, `nama`, `nim`, `alamat`) VALUES ('', '$nama', '$NIM', '$alamat')");
if ($query) {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Disimpan');
  window.location.href='homesarip.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Terjadi Error Saat Penyimpanan Data');
  </script>
  <?php
 }
if(isset($_POST['btn-batal']))
{
 header("Location: homesarip.php");
}
?>