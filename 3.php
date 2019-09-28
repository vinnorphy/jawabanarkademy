<?php
    function filter($warna){
            if ($warna =preg_match("/^[0-9]/", $warna)) {
            return($warna);
            }
    }
   $warna=array(2,5,4,5,"silver");
  $seleksi= array_filter($warna,"filter");
   
   $ambil = count ($seleksi);
   
   echo "<br>";
sort($seleksi);
echo "Bilangan Ascending : ";
for ($j=0; $j<$ambil; $j++)
{
 echo "$seleksi[$j] ","";
}
   
 
?>
