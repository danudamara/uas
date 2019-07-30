<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $no=$_POST['no'];
 $q=mysqli_query($con,"INSERT INTO 'mahasiswaa' ('nim','nama','no') VALUES ('$nim','$nama','$no')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>