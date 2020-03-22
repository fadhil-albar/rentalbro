<form method="POST">
<h2>Tambah playstation</h2><hr>
	<table>
		<tr>
			<td>Nama Playstation :</td>
			<td><input type="text" name="nama_playstation"></td>
		</tr>
		<tr>
			<td>Harga Playstation:</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td>Status playstation:</td>
			<td><select name="status_playstation"> <option>disewa</option><option>ada</option></select></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=playstation" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM playstation ORDER BY id_playstation DESC");
		$hasil = $cek_id->fetch_assoc();
		$id_playstation	= '00'.($hasil['id_playstation'] + 1);
		$nama_playstation 	= $_POST['nama_playstation'];
		$harga 			= $_POST['harga'];
		$status_playstation 	= $_POST['status_playstation'];

		$query_simpan = $koneksi->prepare("INSERT INTO playstation (id_playstation, nama_playstation, harga, status_playstation) VALUES (?,?,?,?)");
		$query_simpan->bind_param('ssss', $id_playstation, $nama_playstation, $harga, $status_playstation);
		$query_simpan->execute();
		$query_simpan->close();
		print "<script>alert('Berhasil menambah playstation')
		window.location = '?page=playstation';
		</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>
