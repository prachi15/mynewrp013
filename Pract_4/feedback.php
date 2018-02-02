
<?php
$con=mysqli_connect("au-cdbr-sl-syd-01.cleardb.net","b878dff8665a3a","672e4100","ibmx_3d8cfd6324cafe3");

if(!$con)
{
die('could not connect:'.mysqli_error());
}
echo "connected";
//mysql_select_db("b1d6fc7b3aade6",$con);

$sql="INSERT INTO product(pname,ptype,pqty,price,msg)VALUES('$_POST[pname]','$_POST[ptype]','$_POST[pqty]','$_POST[price]','$_POST[message]')";

if($con->query($sql)=== TRUE)
{
	
echo "added successfully";	
	
}
else
{
	
	echo "error".$sql." <br>".$con->error; 
}

mysqli_close($con)

?>
