<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $Nama=$_POST['Nama'];
 $Nim=$_POST['Nim'];
 $Email=$_POST['Email'];
 $Sertifikasi=$_POST['Sertifikasi'];

 $q=mysqli_query($con,"INSERT INTO `db` (`id`,`Nama`,`Nim`,`Email`,`Sertifikasi`) VALUES ('$id','$Nama','$Nim','$Email','$Sertifikasi')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
