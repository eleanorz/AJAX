<?php 
	session_start();
	if (isset($_POST['name'])) 
	{
		$array = array('name' => $_POST['name'], 'food' => $_POST['food']);
		echo json_encode($array); 
		// $_SESSION['names'][] = $name;
		// header('location: index.php');
		// die();
		//turns it into a json object
	 }

?>