<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $kata=$_POST['no'];
 $q=mysqli_query($con,"UPDATE `mahasiswaa` SET `nim`='$nim',`nama`='$nama',`no`='$kata' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>