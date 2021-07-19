<?php 
session_start();

//membuat koneksi database
$conn = mysqli_connect("localhost", "root", "", "stockbarang");
//insert data
if(isset($_POST['addnewbarang'])){

    $namabarang = $_POST['namabarang'];
    $deskipsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($conn, "insert into stock (namabarang, deksripsi, stock) values('$namabarang', 
    '$deskipsi', '$stock')");
    if($addtotable){
        header('location:index.php');
    }else{
        echo 'gagal';
        header('location:index.php');
    }

}
?>