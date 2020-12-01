<?php 

$doc = $_POST['doctor_name'];

$p_id = $_POST['patient_id'];
$des = $_POST['consultation_results'];
$date = date("Y-m-d h:i:sa");
$r = file_get_contents('http://192.168.137.1/api/create_consultation.php?end='.$date.'&doctor='.$doc.'&patient='.$p_id.'&slot=1&description='.$des);



?>