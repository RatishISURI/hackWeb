<?php


$col = $_POST['col'];

$id = $_POST['id'];

$r = file_get_contents('http://192.168.137.1/api/update_patient.php?col=hospital_id&id='.$id.'&value='.$col);
header("Location: viewHistory.php");
exit();
?>