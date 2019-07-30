<?php 
//Koneksi database MySQL
$koneksi = mysqli_connect("localhost","id10257296_database","database","id10257296_database") 
    or die("Error ".mysqli_error($koneksi));
//Mengambil data pada table dari database MySQL
$sql = "select * from mahasiswaa";

$result = mysqli_query($koneksi, $sql) 
    or die("Error in Selecting " . mysqli_error($koneksi));
//Membuat array
$mahasiswaa = array();
while($row =mysqli_fetch_assoc($result))
{
$mahasiswaa[] = $row;
}
//Menampilkan konversi data pada tabel identitas ke format JSON
echo json_encode($mahasiswaa);
//close the db connection
mysqli_close($koneksi);
?>