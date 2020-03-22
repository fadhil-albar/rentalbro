<form method="POST">
<h2>Tambah rental</h2><hr>
	<table>
		<tr>
			<td>ID User</td>
			<td>	<select name="id_user"><?php
							$userSql = "SELECT * from user";
							$userQry = mysqli_query($koneksi, $userSql)  or die ("Query user salah : ".mysql_error());

							foreach($userQry as $userRow) {

							$iduser = $userRow['id_user'];
							?>
							<option><?php echo $iduser; } ?></option>
					<select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>Status Order</td>
			<td><select name="status_order">
					<option style="color:red;">Belum Dibayar</option>
					<option style="color: green;">Dibayar</option>
					</select></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=rental" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM orders ORDER BY id_order DESC");
		$hasil = $cek_id->fetch_assoc();
		$id_order	= '00'.($hasil['id_order'] + 1);
		$tanggal = date('Y-m-d');
		$id_user 	= $_POST['id_user'];
		$alamat	= $_POST['alamat'];
		$status_order	= $_POST['status_order'];

		$query_simpan = $koneksi->prepare("INSERT INTO orders (id_order, tanggal, id_user, alamat, status_order) VALUES (?,?,?,?,?)");
		$query_simpan->bind_param('sssss', $id_order, $tanggal, $id_user, $alamat, $status_order);
		$query_simpan->execute();
		$query_simpan->close();
		//print "<script>alert('Berhasil menambah Transaksi')
		//window.location = '?page=transaksi';
		//</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>
