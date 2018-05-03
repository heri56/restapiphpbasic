<?php

$con = mysqli_connect("localhost", "root","", "restdb");
$sql = "Select * from data";
$result = mysqli_query($con, $sql);

$json_array = array();

while ($row  = mysqli_fetch_assoc($result)) {
    array_push($json_array, array(
        "Id No" => $row ['id'],
        "Nama Mata Kuliah" => $row['nama'],
        "Nama Kategori" => $row['category']
    ));
}
echo json_encode($json_array);

?>