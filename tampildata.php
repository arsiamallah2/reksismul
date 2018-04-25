<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data Pelanggaran</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="img/Simpel2.png" />
</head>
<body>
  <table class="table table-striped" style="margin-top:20px;">
                    <thead>
                      <tr class="">
                        <th>ID</th>
                        <th>Nomor Plat</th>
                        <th>Waktu Kejadian</th>
                        <th>Lokasi</th>
                        <th>Gambar</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      include ("koneksi.php");
                      $term = mysqli_real_escape_string($db, $_REQUEST['term']);
                      if (!isset($term)) {
                        $term = "";
                      }
                      if(isset($term) || true){
                      // Attempt select query execution
                      $sql = "SELECT Nomor_Laporan, Waktu_Kejadian, Gambar_Pelanggaran, No_Plat, Lokasi FROM pelanggaran WHERE Lokasi LIKE '" . $term . "%'";
                      if($result = mysqli_query($db, $sql)){
                          if(mysqli_num_rows($result) > 0){
                              while($row = mysqli_fetch_array($result)){
                                  echo '<tr>
                                  <td scope="row">' . $row["Nomor_Laporan"]. '</td>
                                  <td>' . $row["No_Plat"] .'</td>
                                  <td> '.$row["Waktu_Kejadian"] .'</td>
                                  <td scope="row">' . $row["Lokasi"]. '</td>
                                  <td><img src="data:image/png;base64, ' . $row["Gambar_Pelanggaran"] .'" style="width:15%" /></td>
                                </tr>';
                              }
                              // Close result set
                              mysqli_free_result($result);
                          } else{
                              echo "<p>No matches found</p>";
                          }
                      } else{
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                      }
                  }
                      //$sql = "SELECT Nomor_Laporan, Waktu_Kejadian, Gambar_Pelanggaran, No_Plat, Lokasi FROM pelanggaran WHERE Lokasi LIKE ? ";
                       
                  
    
?>

</body>
</html>

