<?php
$data = array(1,2,3,4,5,6);

if (is_array($data)){
if (count($data) >= 3) {
    $jumlahdata= count($data);
    echo"$jumlahdata";
}
else {
     echo"Parameter kurang dari 3!";
}
}else{
    echo"Parameter should be an array!";
}
?>
