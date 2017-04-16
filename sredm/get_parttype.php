<?php

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

include 'conn.php';

$result = array();

$sql = "select * from nparttype where FatherNum=$id";
$rs = $conn->query($sql);

while($row = $rs->fetch_assoc()){
	$node = array();
	$node['id'] = $row['Number'];
	$name=$row['Name'];
	$code=$row['Code'];
	//$node['text'] = "$name ($code)";
	$node['text'] = $row['Name'];
	
	//$node['state'] = has_child($row['Number'],$conn) ? 'closed' : 'open';
	
	$isHasChild=has_child($row['Number'],$conn);
	//$node['iconCls'] = $isHasChild ? 'icon-parenttype' : 'icon-childtype';
	$node['state'] = $isHasChild ? 'closed' : 'open';
	
	array_push($result,$node);
}

echo json_encode($result);

function has_child($id, $conn){
	
	//return false;
	$sql = "select count(*) from nparttype where FatherNum=$id";
	$rs = $conn->query($sql);
	$row = $rs->fetch_row();
	return $row[0] > 0 ? true : false;
}

?>