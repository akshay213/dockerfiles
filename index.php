<form action="" method="POST">

NAME:<input type="text" name="name" id="uname">
<input type="submit" name="submit" id="submit" value="Submit" >

</form>

<?php


	if(isset($_POST['submit']))
{
	
	$uname=$_POST['name'];
	//$txt=$_POST['name']; 
	echo "Name is :".$uname;
}	
	$filename = "/var/www/html/demo.txt"; 
	$file = fopen( $filename, 'a+' ); 
	
	fwrite($filename,$uname); 



?>
