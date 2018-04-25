<?php
include('session.php');
?>
<!DOCTYPE html>
<head>
  <title>Form Masukkan No Plat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="img/Simpel2.png" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
  <!--<link href="css/refreshform.css" rel="stylesheet">-->
  <link rel="shortcut icon" href="img/Simpel2.png" />
  <script src="script.js"></script>
  <script type="text/javascript">
	$(document).ready(function(){
		$("#submit").click(function(){
		var idpolisi = $("#idpolisi").val();
		var noplat = $("#noplat").val();
		// Returns successful data submission message when the entered information is stored in database.
		var dataString = 'idpolisi1='+ idpolisi + '&noplat1='+ noplat;
		if(idpolisi==''||noplat=='')
		{
		alert("Please Fill All Fields");
		}
		else
		{
		// AJAX Code To Submit Form.
		$.ajax({
		type: "POST",
		url: "form.php",
		data: dataString,
		cache: false,
		success: function(result){
		alert(result);
		}
		});
		}
		return false;
		});
		});
</script>
</head>
<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="dashboard.php"><img src="img/Simpel2.png" style="width:18%;"/></a>
        <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="images/logo.jpg" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
         <!-- <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
          </li>-->
          <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle right" data-toggle="dropdown">
          <p> <?php echo $login_session; ?>
          </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Profil</a>
                <a class="dropdown-item" href="#">About</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </div>
            <!--<li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>-->
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="images/face.jpg" alt="">
            <p class="name"><?php echo $login_session;?></p>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.html">
                <img src="images/icons/1.png" alt="">
                <span class="menu-title">Monitoring</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datapelanggaran.php" aria-expanded="false" aria-controls="sample-pages">
                <img src="images/icons/5.png" alt="">
                <span class="menu-title">Data Pelanggaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="settings.html">
                <img src="images/icons/10.png" alt="">
                <span class="menu-title">Settings</span>
              </a>
            </li>
          </ul>
        </nav>
    <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Monitoring</h3>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Kota Bandung</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">SIMPEL</a> &copy; 2018
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
<!--<div class =id="mainform">
<h2>Form Input Pelanggaran</h2> 
<div id="form">
<div>
<input id="Nama" type="text"> <br>
<label style="margin-right: 81px;">ID Polisi :</label>
<input id="idpolisi" type="text"> <br>
<label style="margin-right: 89.5px;">No Plat :</label>
<input id="noplat" type="text"> <br>
<input id="submit" type="button" value="Submit">
</div>
</div>
</div>
</div>-->
</body>

</html>
<?php
include ("koneksi.php");
//mysqli_select_db("reksismul", $db);
if (isset($_POST["idpolisi1"]) && isset($_POST["noplat1"])){
//Fetching Values from URL
$idpolisi2=$_POST["idpolisi1"];
$noplat2=$_POST["noplat1"];
//Insert query
$query = mysqli_query($db,"insert into pelanggaran(ID_Lampu,ID_Polisi,Waktu_Kejadian, Gambar_Pelanggaran, Lokasi, No_Plat ) values (5, $idpolisi2, CURRENT_TIMESTAMP, 'tst', 'Dago', '$noplat2')");
echo "Form Submitted Succesfully";
}
?>