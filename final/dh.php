<?php
echo 'thank you for your inquiry!';
echo '<br><br>';

$n = $_POST['fn'];
$l = $_POST['ln'];
$e = $_POST['eml'];

$c = mysqli_connect('localhost','root','root','mysqltest');

$q = "insert into tabletest (fn, ln, eml) values ('$n', '$l', '$e');";

mysqli_query($c, $q);
mysqli_close($c);


?>