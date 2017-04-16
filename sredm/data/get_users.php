<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();

	include 'conn.php';
	
	$sql = "select count(*) from users";
	$rs = $conn->query($sql);
	$row = $rs->fetch_row();
	$result["total"] = $row[0];
	
	$sql = "select * from users limit $offset,$rows";
	$rs = $conn->query($sql);
	
	$items = array();
	//while($row = $rs->fetch_assoc()){
	while($row = $rs->fetch_assoc()){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);
	
	$conn->close();

?>