<!DOCTYPE HTML>  
<html>
<head>
<script type="text/javascript"></script>
</head>
<body>  


	<?php

	$people = array(
	   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
	);


	$htmlStr = '<table border = 1>';

	foreach($people as $detail) {
		
		$htmlStr .= '<tr>';
		
			$htmlStr .= '<td> '.$detail['id'].' </td>';
			$htmlStr .= '<td> '.$detail['first_name'].' </td>';
			$htmlStr .= '<td> '.$detail['last_name'].' </td>';
			$htmlStr .= '<td> '.$detail['email'].' </td>';
			$htmlStr .= '<td> <button type="button" onclick="alert(\'Name: '.$detail['first_name'].' Email: '.$detail['email'].'\')">Show details</button> </td>';
			
			$htmlStr .= '</td>';
			
		$htmlStr .= '</tr>';
		
	}
	$htmlStr .= '</table>';

	echo $htmlStr;

	?>
</body>

<html>