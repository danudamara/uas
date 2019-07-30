<?php 
//Koneksi database MySQL
$koneksi = mysqli_connect("localhost","id10257296_database","database","id10257296_database") 
    or die("Error ".mysqli_error($koneksi));
//Mengambil data pada table dari database MySQL
$sql = "select * from makul";

$result = mysqli_query($koneksi, $sql) 
    or die("Error in Selecting " . mysqli_error($koneksi));
//Membuat array
$makul = array();
while($row =mysqli_fetch_assoc($result))
{
$makul[] = $row;
}
//Menampilkan konversi data pada tabel identitas ke format JSON
echo json_encode($makul);
//close the db connection
mysqli_close($koneksi);
?>