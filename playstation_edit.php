
	<h3>Edit data</h3>
	<hr>
	<?php 
	include "koneksi.php";
	$id_masakan = $_GET['kode'];
	$query_mysqli = $koneksi->query("SELECT * FROM masakan WHERE id_masakan='$id_masakan'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form  method="post">		
		<table>
			<tr>
				<td>Nama Masakan</td>
				<td>
					<input type="hidden" name="id_masakan" value="<?php echo $data['id_masakan'] ?>">
					<input type="text" name="nama_masakan" value="<?php echo $data['nama_masakan'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
										
			</tr>	
			<tr>
				<td>Status</td>
				<td><input type="text" name="status_masakan" value="<?php echo $data['status_masakan'] ?>"></td>					
			</tr>	
			<tr>
			
				<td colspan="2"><input name="submit" type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<a href="?page=transaksi">Kembali &raquo;</a>
	<?php } ?>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
$id_masakan = $_POST['id_masakan'];
$nama_masakan = $_POST['nama_masakan'];
$harga = $_POST['harga'];
$status_masakan = $_POST['status_masakan'];

 
mysqli_query($koneksi, "UPDATE masakan SET id_masakan='$id_masakan', nama_masakan='$nama_masakan', harga='$harga', status_masakan='$status_masakan' WHERE id_masakan='$id_masakan'");
 
	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=masakan';
	</script>";
	}catch(Exception $e){
	
		echo $e->getMessage();
	}
}
?>