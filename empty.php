<?php
$host = 'sql113.id.vg';
  $user = 'idvg_20759683';      
  $password = 'qwerty321';      
  $database = 'idvg_20759683_dbtugas';  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;

$query = "DELETE FROM `dokumen` WHERE 1";
 
$hasil = mysql_query ($query);
 
echo "Data telah dihapus.";
?>
<br>
<a> Kembali ke tabel ? </a> <a href="tokenisasi.php"> YA </a>