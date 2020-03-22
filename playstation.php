<h1><b>Daftar Playstation</b></h1>
<hr>

<table width="700" border="0" cellpadding="2" cellspacing="1" >

  <tr>
    <td colspan="2"><a href="?page=playstation_tambah" target="_self"><img src="images/add.png">Tambah Playstation</a></td>
  </tr>

  <tr>
    <td colspan="2"><table class="daftar_tabel" width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th><b>Id Playstation</b></th>
		<th><b>Nama Playstation</b></th>
        <th><b>Harga</b></th>
        <th><b>Status</b> </th>
		<th><b>Hapus</b> </th>

      </tr>
	  </td>
      <?php
	$playstationSql = "SELECT * from playstation";
	$barangQry = mysqli_query($koneksi, $playstationSql)  or die ("Query barang salah : ".mysql_error());
	$nomor  = 0;
	 foreach($barangQry as $playstationRow) {
	$nomor++;
	$Kode = $playstationRow['id_playstation'];
	?>
      <tr>
        <td><?php echo $Kode; ?></td>
		<td><?php echo $playstationRow['nama_playstation']; ?></td>
        <td><?php echo $playstationRow['harga']; ?></td>
		<td><?php
            if ($playstationRow['status_playstation']=='ada') {
                echo "<p style='color:green'><b>Ada</b></p>";
            } else {
                echo "<p style='color:red'><b>Disewa</b></p>";
            }

     ?></td>
		 <td align="center"><a href="?page=playstation_hapus&amp;Kode=<?php echo $Kode ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a>
      <a href="?page=playstation_edit&amp;kode=<?php echo $Kode ?>" target="_self" alt="Edit Data" ><img src="images/edit.png"></a></td>
		   </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr>

	</td>
  </tr>
</table>
