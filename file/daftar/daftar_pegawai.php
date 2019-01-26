<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Pegawai</title>

    <!-- Icons font CSS-->
    <link href="../assets/daftar/fonts/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../assets/daftar/fonts/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../assets/daftar/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/daftar/vendor/daterangepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/daftar/css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="../assets/daftar/css/style.css">
</head>

<body>
    <div class="page-wrapper p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registrasi Pegawai</h2>
                    <!-- Form Begin -->
                    <form method="POST" action="proses_daftar.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama</label>
                                    <input class="input--style-4" type="text" name="nm_pegawai">
                                </div>
                            </div> <br>                          
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username" maxlength="30">
                                </div>
                            </div>
                        </div>                      
                        <div class="row row-space">
                            <div class="col-2">                           
                                <div class="input-group">
                                    <label class="label">Nomor Telpon</label>
                                    <input class="input--style-4" type="text" name="no_telp" maxlength="13" onkeyup="validAngka(this)">
                                </div>
                            </div>                           
                        </div>
                        <div class="input-group">
                            <label class="label">Agama</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="agama">
                                    <option disabled="disabled" selected="selected">-Pilih-</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Buddha</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="register">Daftar</button>
                        </div>                        
                          </div>
                    <br>
                <div class="div">                            
                  <span class="text-small font-weight-semibold">Sudah mempunyai Akun, sebelumnya ?</span>
                <a href="../login/login_pegawai.php">Masuk</a>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../assets/daftar/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../assets/daftar/vendor/select2/select2.min.js"></script>
    <script src="../assets/daftar/vendor/daterangepicker/moment.min.js"></script>
    <script src="../assets/daftar/vendor/daterangepicker/daterangepicker.js"></script>

    <script language='javascript'>
        function validAngka(a)
        {
          if(!/^[0-9.]+$/.test(a.value))
          {
          a.value = a.value.substring(0,a.value.length-1000);
          }
        }
    </script>

    <!-- Main JS-->
    <script src="../assets/daftar/js/global.js"></script>

</body>

</html>
<!-- end document-->