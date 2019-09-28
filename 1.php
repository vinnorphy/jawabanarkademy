<?php
// Data 1
$data [] = array(
    'name' => 'Norvin',
    'age' => 18,
    'address'=> 'Jl. Bukit Duri Tanjakan Gg.Hj.Tompel No.20',
    'hobbies' => 'Fotografi, Game',
    'is_married' => 'false',
    'list_school' => array(
        'name' => 'SMK CAHAYA SAKTI',
        'year_in' => 2016,
        'year_out' => 2019,
        'major' => 'Multimedia'),
    'skills' => array(
        'skill_name' => 'Photografi',
        'level' => 'advance'),
    'interest_in_coding' => 'true'
);

// Data 2
$data [] = array(
    'name' => 'Joshua Andre',
    'age' => 22,
    'address'=> 'Jl. Angkur No. 10',
    'hobbies' => 'Fotografi, Hiking',
    'is_married' => 'false',
    'list_school' => array(
        'name' => 'Universitas Atma Jaya',
        'year_in' => 2015,
        'year_out' => 2019,
        'major' => 'Multimedia'),
    'skills' => array(
        'skill_name' => 'Photografi',
        'level' => 'advance'),
    'interest_in_coding' => 'false'
);



$jsonfile = json_encode($data, JSON_PRETTY_PRINT);


file_put_contents('biodata.json', $jsonfile);

?>
