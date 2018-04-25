<?php
include ('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data Pelanggaran</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="img/Simpel2.png" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length || true){
            $.get("tampildata.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("button").click(function(){
      $(#clik).load(semua.php);
    });
  });
</script>
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="dashboard.html"><img src="img/Simpel2.png" style="width:18%;"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo.jpg" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php"><i class="fa fa-th"></i></a>
          </li>
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
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <img src="images/icons/1.png" alt="">
                <span class="menu-title">Monitoring</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
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

        <div class="content-wrapper" id="tabel">
          <h3 class="page-heading mb-4">Monitoring</h3>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Kota Bandung</h5>
				  <!--<form>
          <select name="location" onchange="showLocation(this.value)">
            <option value="">Pilih Lokasi:</option>
            <option value="1">Simpang</option>
            <option value="2">Dago</option>
            <option value="3">Antapani</option>
            <option value="4">Kiaracondong</option>
            </select>
          </form>
          <br>
          <div id="txtHint"><b>Lokasi</b></div>-->
          <div class="search-box">
          <input type="text" autocomplete="off" placeholder="Pilih Lokasi" />
          <div class="result"></div>
          </div>
                    <!--<select class="form-control">
          					  <option>January</option>
          					  <option>February</option>
          					  <option>March</option>
          					  <option>April</option>
          					  <option>May</option>
          					  <option>June</option>
          					  <option>July</option>
          					  <option>August</option>
          					  <option>September</option>
          					  <option>October</option>
          					  <option>November</option>
          					  <option>December</option>
          					</select>-->

                  <!--<table class="table table-striped" style="margin-top:20px;">
                    <thead>
                      <tr class="">
                        <th>ID</th>
                        <th>Nomor Plat</th>
                        <th>Waktu Kejadian</th>
            						<th>Lokasi</th>
            						<th>Gambar</th>
                      </tr>
                    </thead>
                    <tbody>-->
                    
                      <!--<tr>
                        <td>01001</td>
                        <td>D6969AKP</td>
                        <td>01 Januari 2018</td>
                        <td>Simpang Dago</td>
                        <td style="color:blue;">Unduh</td>
                      </tr>
                      <tr>
                        <td>01002</td>
                        <td>D7089BCA</td>
                        <td>05 Januari 2018</td>
                        <td>Jl. Pajajaran</td>
                        <td style="color:blue;">Unduh</td>
                      </tr>
                      <tr>
                        <td>01003</td>
                        <td>B6521YTR</td>
                        <td>07 Januari 2018</td>
                        <td>Jl. Asia Afrika</td>
                        <td style="color:blue;">Unduh</td>
                      </tr>
					  <tr>
                       <td>01004</td>
                        <td>D1234VCA</td>
                        <td>07 Januari 2018</td>
                        <td>Simpang Dago</td>
                        <td style="color:blue;">Unduh</td>
                      </tr>
					  <tr>
                      <td>01005</td>
                        <td>B0753BRI</td>
                        <td>09 Januari 2018</td>
                        <td>Kiara Condong</td>
                        <td style="color:blue;">Unduh</td>
                      </tr>
					  <tr>
                        <td>01006</td>
                        <td>F4572HUR</td>
                        <td>11 Januari 2018</td>
                        <td>Jl. Ganeca</td>
                        <td style="color:blue;">Unduh</td>
                      </tr>
					  <tr>
                        <td>01007</td>
                        <td>D5272GHU</td>
                        <td>13 Januari 2018</td>
                        <td>Taman Sari</td>
                        <td style="color:blue;">Unduh</td>
                      </tr>
					  <tr>
                        <td>01008</td>
                        <td>F4300FUK</td>
                        <td>19 Januari 2018</td>
                        <td>Jl. Dipati Ukur</td>
                        <td style="color:blue;">Unduh</td>
                      </tr>
					  <tr>
                        <td>01009</td>
                        <td>B5478OOP</td>
                        <td>23 Januari 2018</td>
                        <td>Jl. Tubagus Ismail</td>
                        <td style="color:blue;">Unduh</td>
                      </tr>
					  <tr>
                        <td>01010</td>
                        <td>D4788BNI</td>
                        <td>30 Januari 2018</td>
                        <td>Sadang Serang</td>
                        <td style="color:blue;">Unduh</td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">SCCIC</a> &copy; 2018
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
</body>

</html>
