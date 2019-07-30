<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kd_sponsor=$_POST['kd_sponsor'];
 $nama_sponsor=$_POST['nama_sponsor'];
 $kontrak=$_POST['kontrak'];
 $q=mysqli_query($con,"UPDATE `makul` SET `kd_sponsor`='$kd_sponsor',`nama_sponsor`='$nama_sponsor',`kontrak`='$kontrak' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>