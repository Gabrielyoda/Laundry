<!doctype html>
<html lang="en">

<head>
	<title>Daftar Pesanan | Tambah Pesanan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="../../assets/dashboard/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/dashboard/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/dashboard/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../../assets/dashboard/vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" href="../../assets/dashboard/css/main.css">
	<link rel="stylesheet" href="../../assets/dashboard/css/demo.css">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<?php
include "../../config/connection.php";

session_start();
if($_SESSION['username'] ==null){
	header("location:../login/login.php");
}
$id_user	    = $_POST['id_user'] ;
$nama_barang	= $_POST['nama_barang'] ;
$harga          = $_POST['harga_laundry'] ;
$qty		    = $_POST['qty'] ;
$count = count($nama_barang);
$tanggal = date("y-m-d");
$no_pesanan = mt_rand(100000,999999);

//perintah query insert ke table pemesanan
$sql = "insert into detail_pesanan (id_user,nama_barang,qty,harga,tanggal,no_pesanan) values";
				
//perintah seleksi data pesanan kecuali yang 0 //
$seleksi="SELECT * FROM detail_pesanan WHERE qty <>'0' and no_pesanan='$no_pesanan'";
$sqlNama = "SELECT * from user where id_user=$id_user";
$na = mysqli_query($connection,$sqlNama);
$nama_user = mysqli_fetch_array($na);
$namauser = $nama_user['nama_user'];
$no_telp = $nama_user['no_telp'];

//perintah hapus row yang qty = 0 //
$hapusrow="DELETE FROM detail_pesanan WHERE qty=0";


for( $i=0; $i < $count; $i++ )
{
    $sql .= "('$id_user','{$nama_barang[$i]}','{$qty[$i]}','{$harga[$i]}','$tanggal','$no_pesanan')";
    $sql .= ",";
}
 
$sql = rtrim($sql,",");
//eksekusi query insert
$insert = mysqli_query($connection,$sql);
if( !$insert )
                            {
                                echo "gagal insert : $sql ";
                            }else{

                            $hapus = mysqli_query($connection,$hapusrow);                    
                            $hitung="SELECT SUM(harga * qty) AS totalorder,SUM(qty) AS totalqty FROM detail_pesanan WHERE no_pesanan='$no_pesanan' GROUP BY no_pesanan";
	                        $vhitung = mysqli_query($connection,$hitung);   
                            $hasil = mysqli_fetch_array($vhitung);
                            $totalorder 	= $hasil['totalorder'] ;
							$totalqty 	= $hasil['totalqty'] ;
?>
<script type="text/javascript">
	
</script>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="../../assets/dashboard/img/logo-dark2.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<!-- <form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form> -->
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">							
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span><?php echo $_SESSION['username'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="profile_admin.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
                <ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>	
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pencil"></i> <span>Master Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="pelanggan.php" class="">Pelanggan</a></li>
									<li><a href="barang.php" class="">Barang</a></li>
									<li><a href="jenis.php" class="">Jenis barang</a></li>
								</ul>
							</div>
						</li>
						<li><a href="daftar_pesanan.php" class=""><i class="lnr lnr-inbox"></i> <span>Daftar Pesanan Laundry</span></a></li>
                        <li><a href="bukti_pesanan.php" class=""><i class="lnr lnr-cart"></i> <span>Bukti Pesanan</span></a></li>
						<li><a href="tentang_perusahaan.php" class=""><i class="lnr lnr-apartment"></i> <span>Tentang Perusahaan</span></a></li>
                        <li><a href="Laporan.php" class=""><i class="lnr lnr-printer"></i> <span>Laporan Data</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
        <div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="row">
						<div class="col-md-12">

                            <div class="panel">
                            <div class='alert alert-warning' role='alert'>
	                            <center>Daftar pesan</center>
	                        </div>
                                
								<div class="panel-body">
									<table class="table">
                                    
                                  
                                    <tr><td>Nama </td><td><?php echo $namauser?></td></tr>
                                    <tr><td>No Telp </td><td><?php echo $no_telp?></td></tr>
									<tr><td>No Pesanan</td><td><?php echo $no_pesanan?></td></tr>
									<tr><td>Total Harga</td><td><?php echo $totalorder?></td></tr>
									<tr><td>Banyak Barang</td><td><?php echo $totalqty?></td></tr>
									</table>
									<div class="form-group">
									
									</div>
									</table>
									
								</div>

							<div class='alert alert-info' role='alert'>
							<center>Daftar item yang dipesan</center>
							</div>
								<table>
								<table class='table table-striped'>
									<thead>
										<tr>
			 							<th>Type</th>
			  							<th>Harga</th>
			  							<th>Qty</th>
			  							<th>Sub Total</th>
										</tr>
		  							</thead>
	     							<tbody>
										<?php
										$seleksi="SELECT * FROM detail_pesanan WHERE qty <>'0' and no_pesanan='$no_pesanan'";	 
										$tampilkan = mysqli_query($connection,$seleksi);
										while($select_result = mysqli_fetch_array($tampilkan))
										{
										$nama_baranga = $select_result['nama_barang'] ;
										$hargaa	 	= $select_result['harga'] ;
										$qtya	 	= $select_result['qty'] ;
										$suborder 	= $hargaa*$qtya; 
										

										echo"<tr><td>$nama_baranga</td><td>$hargaa</td><td>$qtya</td><td>$suborder</td></tr> ";
													}
										
											echo"<tr><td></td><td><b>TOTAL</b></td><td><h3><span class='label label-warning'>$totalqty</span></h3></td><td><h3><span class='label label-danger'>$totalorder</span></h3></td></tr> ";
											
										echo"</tbody></table>";
											
											echo"
										<div class='alert alert-warning' role='alert'>
										
										";
										?>
										<form action="tambah_pesanan_proses2.php" method="post" onsubmit="return validasi(this)">
										<input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user?>">
										<input type="hidden" class="form-control" name="no_pesanan" value="<?php echo $no_pesanan?>">
										<input type="hidden" class="form-control" name="tanggal" value="<?php echo $tanggal?>">
										<center><button type="submit" class="btn btn-primary" name="submit">Konfirmasi</button>
										<a href='javascript:if(window.print)window.print()'>
										<button type='button' class='btn btn-success'><span class='glyphicon glyphicon-print' aria-hidden='true'></span>Cetak halaman ini</button></a>
										</center>
										</div>
											</div>
											</form>
								</table>
							</div>
						
							<!-- END BASIC TABLE -->
						</div>
            
                </div>
            </div>
        </div>					
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019  All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="../../assets/dashboard/vendor/jquery/jquery.min.js"></script>
	<script src="../../assets/dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../assets/dashboard/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../assets/dashboard/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="../../assets/dashboard/vendor/chartist/js/chartist.min.js"></script>
	<script src="../../assets/dashboard/scripts/klorofil-common.js"></script>
	<script>

	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
<?php }?>