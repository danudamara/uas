<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nip=$_POST['nip'];
 $nama_official=$_POST['nama_official'];
 $q=mysqli_query($con,"INSERT INTO `dosenn` (`nip`,`nama_official`) VALUES ('$nip','$nama_official')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>