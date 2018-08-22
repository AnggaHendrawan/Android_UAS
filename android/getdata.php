<?php
include 'koneksi.php';
$sql="select * from imageupload";
$result = $con -> query($sql);
if ( $result->num_rows>0){
	//output data of each row
	while($row[]=$result->fetch_assoc()){
		$json=json_encode(array('biodata'=>$row));
	}
}else {
	echo "0 results";
}
echo $json;
$con->close();
?>