<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $kd_sponsor=$_POST['kd_sponsor'];
 $nama_sponsor=$_POST['nama_sponsor'];
 $kontrak=$_POST['kontrak'];
 $q=mysqli_query($con,"INSERT INTO `makul` (`kd_sponsor`,`nama_sponsor`,`kontrak`) VALUES ('$kd_sponsor','$nama_sponsor','$kontrak')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>