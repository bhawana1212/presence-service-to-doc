
<?php session_start();?>

<div id="content" >

<?php
$usr=$_REQUEST['txtUser'];
$pass=$_REQUEST['txtPass'];
include("dbConnect.inc");

$sql= "select * from student_detail where 
username='$usr'";
$rsUser=@mysql_query($sql);
$check=@mysql_fetch_array($rsUser);

if(isset ($check)){

header("location:courseRegistration.php");
}else{
	echo 'failure';
}

		?>
<center>
<input type="button" onClick="window.location='http://localhost/subregistration/'" class="Redirect" value="Click here to go to login page"/>
</center>
<?php

	

?>
</div>
