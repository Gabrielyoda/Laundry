<!doctype html>
<html lang="en">

<head>
	<title>Master Data | Tambah Data</title>
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
$query = "select*from user where level='2'";
$result = mysqli_query($connection,$query);

?>
<script type="text/javascript">
	function validasi(form){
 	if (form.nama_user.value == ""){
    alert("Nama user harus diisi!");
    form.nama_user.focus();
    return (false);
  	}
	else if (form.alamat.value == ""){
    alert("Alamat harus diisi!");
    form.alamat.focus();
    return (false);
  	}
	else if (form.no_telp.value == ""){
    alert("No Telp harus diisi!");
    form.no_telp.focus();
    return (false);
  	}
	else if (form.username.value == ""){
    alert("Username harus diisi!");
    form.username.focus();
    return (false);
  	}
	else if (form.password.value == ""){
    alert("password harus diisi!");
    form.password.focus();
    return (false);
  	}
	else if (form.repassword.value == ""){
    alert("Silahkan Ulangi password");
    form.repassword.focus();
    return (false);
  	}
 	else if (form.password.value != form.repassword.value){
   	alert("Password tidak sama, silahkan ulangi");
   	form.nama.focus();
   	return (false);
 }
return (true);
}
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
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Input Pelanggan</h3>
                                </div>
                                <form action="tambah_pelanggan_proses.php" method="post" onsubmit="return validasi(this)">
								<div class="panel-body">
									<table class="table">
										
                                        <tr>
                                        <td>Nama Pelanggan <br><input type="text" class="form-control" name="nama_user" ></td>
                                        </tr>

                                        <tr>
                                        <td>Alamat <br> <input type="text" class="form-control" name="alamat" ></td>
                                        </tr>

                                        <tr>
                                        <td>No Telp <br><input type="text" class="form-control" name="no_telp" ></td>
                                        </tr>

                                        <tr>
                                        <td>Username <br><input type="text" class="form-control" name="username" ></td>
                                        </tr>

                                        <tr>
                                        <td>Password <br> <input type="password" class="form-control" name="password" ></td>
                                      
                                        </tr>

                                        <tr>
                                        <td>Re-Password <br> <input type="password" class="form-control" name="repassword" ></td>
                                        </tr>

										<tr>
										<td><input type="submit" class="btn btn-success" name="submit" value="simpan"></td>
										</tr>
									</table>
								</div>
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
