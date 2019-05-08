<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $Nama=$_POST['Nama'];
 $Nim=$_POST['Nim'];
 $Email=$_POST['Email'];
 $Sertifikasi=$_POST['Sertifikasi'];

 $q=mysqli_query($con,"UPDATE `db` SET `Nama`='$Nama',`Nim`='$Nim',`Email`='$Email',`Sertifikasi`='$Sertifikasi' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
