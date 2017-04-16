<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	
	$prtnum = isset($_POST['prtnum']) ? intval($_POST['prtnum']) : 0;
	
	$offset = ($page-1)*$rows;
	$result = array();

	
	
	include 'conn.php';
	
	$sqlold="select count(*) from npartvarianttable ";
	$sql=$sqlold;
	
	//$sql = "$sqlold where PrtNum=$prtnum";
	
	if($prtnum>0)
	{
		$sql = "$sqlold where PrtNum=$prtnum";
	}else
	{
		$sql=$sqlold;
	}
	
	
	$rs = $conn->query($sql);
	$row = $rs->fetch_row();
	$result["total"] = $row[0];
	
	$sqlold="select * from npartvarianttable ";
	
	//$sql = "$sqlold where PrtNum=$prtnum limit $offset,$rows";
	
	if($prtnum>0)
	{
		$sql = "$sqlold where PrtNum=$prtnum limit $offset,$rows";
	}else
	{
		$sql= "$sqlold  limit $offset,$rows";
	}
		
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