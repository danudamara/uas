<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nip=$_POST['nip'];
 $nama_official=$_POST['nama_official'];
 $q=mysqli_query($con,"UPDATE `dosenn` SET `nip`='$nip',`nama_official`='$nama_official' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>