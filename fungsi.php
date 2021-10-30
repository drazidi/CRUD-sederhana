<?php
session_start();
$conn = mysqli_connect("localhost","root", "","stock_barang");


if(isset($_POST['tambahstock'])){
    $id_barang = $_POST['id'];
    $nama_barang = $_POST['nama'];
    $stock_barang = $_POST['stock'];
   $tambahbarang = mysqli_query($conn,"insert into barang (id,nama_barang, jumlah_stock) values('$id_barang','$nama_barang','$stock_barang')");
    if($tambahbarang){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:tambah.php');
    }
}

if(isset($_POST['editstock'])){
    $id_barang = $_POST['id'];
    $nama_barang = $_POST['nama'];
    $stock_barang = $_POST['stock'];

    $updatebarang = mysqli_query($conn,"update barang set nama_barang='$nama_barang', jumlah_stock='$stock_barang' where id ='$id_barang'");
    if($updatebarang){
        header('location:index.php');
    } else {
        echo 'Barang gagal diedit';
        header('location:edit.php');
    }
}

if (isset($_POST['hapusstock'])){
    $id_barang = $_POST['id'];
$hapusbarang = mysqli_query($conn, "delete from barang where id='$id_barang'");
if($hapusbarang){
    header('location:index.php');
}
echo'Barang gagal dihapus';
header('location:index.php');

}