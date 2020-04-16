<!doctype html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h1>Entries</h1>
	
<!--
	<h3>Name: First last</h3>
	<p>Email: joe@gmail.com</p>
-->
	
	<?php
		$c = mysqli_connect('localhost', 'root', 'root', 'mysqltest');
		$q = 'select * from tabletest';
		$r = mysqli_query($c, $q);
	
		print_r($r);
		
		foreach($r as $k =>$v){
			//print_r($v);
			echo '<h3>Name: '.$v['fn'].' '.$v['ln'].'</h3>
					<p>Email: '.$v['eml'].'</p>';
		};
	
		mysqli_close($c);
	
	?>
	
</body>
</html>