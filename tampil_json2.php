<?php 
//Koneksi database MySQL
$koneksi = mysqli_connect("localhost","id10257296_database","database","id10257296_database") 
    or die("Error ".mysqli_error($koneksi));
//Mengambil data pada table dari database MySQL
$sql = "select * from dosenn";

$result = mysqli_query($koneksi, $sql) 
    or die("Error in Selecting " . mysqli_error($koneksi));
//Membuat array
$dosenn = array();
while($row =mysqli_fetch_assoc($result))
{
$dosenn[] = $row;
}
//Menampilkan konversi data pada tabel identitas ke format JSON
echo json_encode($dosenn);
//close the db connection
mysqli_close($koneksi);
?>