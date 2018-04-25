<?php
include ("koneksi.php");
$d=".";
if(isset($_FILES['file'])){
    $file = $_FILES['file'];
    $nama="A.png";
    if($file['error']==0){
        if( move_uploaded_file($file['tmp_name'], $d.'/'.$nama ) ){
            echo "File telah diunggah di ".$d.'/'.$nama ."<br/>";
            $txt = img2text(imagecreatefrompng($nama));
            //echo($txt);
            
            $db->query("INSERT INTO pelanggaran VALUES(NULL, 4, 10002, CURRENT_TIMESTAMP, '$txt', 'Dago', 'D4005PPS') ");
        }
    }
}


function img2text($img){
    ob_start (); 
    imagepng ($img);
    $image_data = ob_get_contents (); 
    ob_end_clean (); 
    return base64_encode ($image_data);

    $namafile = date('ydDmMYHis').rand();
    imagepng($img, $namafile);
    $imagedata = file_get_contents($namafile);
    $base64 = base64_encode($imagedata);
    unlink($namafile);
    return $base64;
}


?>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit">

</form>
