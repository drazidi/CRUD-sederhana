<?php
require 'fungsi.php';
?>

<html>
<body>

<a href="tambah.php"><button name="input" > Tambah Barang</button></a>
<table border="1">
<tr>
<td>No</td>
<td>Nama Barang</td>
<td>Jumlah Stok</td>
<td>Aksi</td>
</tr>
<?php 
$ambildatastock = mysqli_query($conn, "select*from barang");
$i = 1 ;
while($data=mysqli_fetch_array($ambildatastock))
{   $id = $data['id'];
    $namabarang = $data['nama_barang'];
    $jumlahstock = $data['jumlah_stock'];
?>
<tr>
<td><?=$i++;?></td>
<td><?=$namabarang;?></td>
<td><?=$jumlahstock;?></td>
<td><a href="edit.php?id=<?=$id;?>"><button type="button" value="Edit">Edit</button></a>
<form method="post"><button type ="submit" name="hapusstock"><input type="hidden" name="id" value="<?=$id;?>">Hapus</button></form></td>
</tr>
<?php } ?>
</table>
</body>
</html>