<?php
	$prtnum= isset($_GET['prtnum']) ? intval($_GET['prtnum']) : 0;

	
	include 'conn.php';
	
	$sql = "select * from npartpic where PrtNum=$prtnum";
	
	$rs = $conn->query($sql);
	

	while($row = $rs->fetch_assoc()){
		
	    Header( "Content-type: image/gif"); 
		$result=$row['File'];
	    echo $result; 
		break;
	}
	
	$conn->close();

?>