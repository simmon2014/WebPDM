<?php
	$wordname = $_REQUEST['wordinput'];
	//$wordname= isset($_POST['wordname']) ? intval($_POST['wordname']) : 1;
	$wordname=trim($wordname,"\r\n\t ");
	$result = array();

	include 'conn.php';
	
	// $sql = "select count(*) from users";
	// $conn->query($sql);
	// $rs = $conn->query($sql);
	// $row = $rs->fetch_row();
	// $result["total"] = $row[0];
	
	$sql = "select * from wordcon where WordName='$wordname'";
	$rs = $conn->query($sql);
	
	$items = array();
	//while($row = $rs->fetch_assoc()){
	while($row = $rs->fetch_assoc()){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	
	echo json_encode($result);
	
	//echo json_encode($items);
	
	
	$conn->close();

?>