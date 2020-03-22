<h3>Selamat Datang di RENTALBRO's</h3><hr><p align="left">Halo <b><?php echo $_SESSION['nama']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.

                                                <!-- STAT -->
                                                <div class="row list-separated profile-stat">
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"> <?php
$sql = "SELECT * FROM orders";
$query = mysqli_query($koneksi,$sql);
$count = mysqli_num_rows($query);
echo " $count";
?></div>
                                                        <div class="uppercase profile-stat-text"> Pesanan </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"><?php
$sql = "SELECT * FROM transaksi";
$query = mysqli_query($koneksi,$sql);
$count = mysqli_num_rows($query);
echo " $count";
?></div>
                                                        <div class="uppercase profile-stat-text"> Transaksi </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <div class="uppercase profile-stat-title"> <?php
$sql = "SELECT * FROM playstation";
$query = mysqli_query($koneksi,$sql);
$count = mysqli_num_rows($query);
echo " $count";
?> </div>
                                                        <div class="uppercase profile-stat-text"> Playstation </div>
                                                    </div>
                                                </div>
<img align="middle" src="images/pekmen.png" width="300" height="200">
                                                <!-- END STAT -->
