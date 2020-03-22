<?php
if($_GET){
	switch ($_GET['page']) {
		case '':
			if(!file_exists("main.php")) die ("Empty Main Page!");
			include "Main.php";
			break;
		case 'HalamanUtama':
			if(!file_exists("main.php")) die ("Sorry Empty Page!");
			include "Main.php";
			break;
		case 'home':
			if(!file_exists("home.php")) die ("Sorry Empty Page!");
			include "home.php";
			break;
		case 'Logout':
			if(!file_exists("logout.php")) die ("Sorry Empty Page!");
			include "logout.php";
			break;
		case 'playstation':
			if(!file_exists("playstation.php")) die ("Sorry Empty Page!");
			include "playstation.php";
			break;
		case 'rental':
			if(!file_exists("rental.php")) die ("Sorry Empty Page!");
			include "rental.php";
			break;
		case 'rental_tambah':
			if(!file_exists("rental_tambah.php")) die ("Sorry Empty Page!");
			include "rental_tambah.php";
			break;
		case 'rental_hapus':
			if(!file_exists("rental_hapus.php")) die ("Sorry Empty Page!");
			include "rental_hapus.php";
			break;
		case 'playstation_tambah':
			if(!file_exists("playstation_tambah.php")) die ("Sorry Empty Page!");
			include "playstation_tambah.php";
			break;
		case 'transaksi_hapus':
			if(!file_exists("transaksi_hapus.php")) die ("Sorry Empty Page!");
			include "transaksi_hapus.php";
			break;
		case 'transaksi_tambah':
			if(!file_exists("transaksi_tambah.php")) die ("Sorry Empty Page!");
			include "transaksi_tambah.php";
			break;
		case 'playstation_hapus':
			if(!file_exists("playstation_hapus.php")) die ("Sorry Empty Page!");
			include "playstation_hapus.php";
			break;
		case 'pengguna':
			if(!file_exists("pengguna.php")) die ("Sorry Empty Page!");
			include "pengguna.php";
			break;
		case 'pengguna_tambah':
			if(!file_exists("pengguna_tambah.php")) die ("Sorry Empty Page!");
			include "pengguna_tambah.php";
			break;
		case 'pengguna_hapus':
			if(!file_exists("pengguna_hapus.php")) die ("Sorry Empty Page!");
			include "pengguna_hapus.php";
			break;
		case 'transaksi':
			if(!file_exists("transaksi.php")) die ("Sorry Empty Page!");
			include "transaksi.php";
			break;
		case 'transaksi_edit':
			if(!file_exists("transaksi_edit.php")) die ("Sorry Empty Page!");
			include "transaksi_edit.php";
			break;
		case 'rental_edit':
			if(!file_exists("rental_edit.php")) die ("Sorry Empty Page!");
			include "rental_edit.php";
			break;
		case 'playstation_edit':
			if(!file_exists("playstation_edit.php")) die ("Sorry Empty Page!");
			include "playstation_edit.php";
			break;
		case 'pengguna_edit':
			if(!file_exists("pengguna_edit.php")) die ("Sorry Empty Page!");
			include "pengguna_edit.php";
			break;

		default:
			if(!file_exists("main.php")) die ("Empty Page!");
			include "main.php";
			break;
	}
}
?>
