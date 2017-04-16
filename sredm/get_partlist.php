<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	
	$typeid = isset($_POST['typeid']) ? intval($_POST['typeid']) : 0;
	
	//$typeid=105;
	
	$offset = ($page-1)*$rows;
	$result = array();

	include 'conn.php';
	
	$sqlold="select count(*) from npartmanagetable ";
	$sql=$sqlold;
	
	if($typeid>0)
	{
		$sql = "$sqlold where TypeNum=$typeid";
	}else
	{
		$sql=$sqlold;
	}
	
	
	$rs = $conn->query($sql);
	$row = $rs->fetch_row();
	$result["total"] = $row[0];
	
	$sqlold="select * from npartmanagetable ";
	
	if($typeid>0)
	{
		$sql = "$sqlold where TypeNum=$typeid limit $offset,$rows";
	}else
	{
		$sql= "$sqlold  limit $offset,$rows";
	}
	
	//$sql = "select * from npartmanagetable where TypeNum=$typeid limit $offset,$rows";
	
	
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