<?php
require 'fungsi.php';
?>
<html>
<body>
<form method="post">
<table border="0">
<input type="text" name="id" hidden/>
<tr>
    <td>Nama Barang</td>
    <td><input type="text" name="nama"/></td>    
</tr>
<tr>
<td>Stock Barang</td>
<td><input type="text" name="stock"/></td>    
</tr>
    <tr>
<td colspan="2" align="center"><button type ="submit" name="tambahstock">Submit</button> </td>
</tr>
</table>
</form>
</body>
</html>