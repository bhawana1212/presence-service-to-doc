
<html>
<body>
<?php
	include("header.php");
?>
<div id="content" >

<?php
  
  $co=$_REQUEST['txtCourse'];
  $nm1=$_REQUEST['txtName1'];
  $cd1=$_REQUEST['txtCredit1'];
  $nm2=$_REQUEST['txtName2'];
  $cd2=$_REQUEST['txtCredit2'];
  $nm3=$_REQUEST['txtName3'];
  $cd3=$_REQUEST['txtCredit3'];
  $nm4=$_REQUEST['txtName4'];
  $cd4=$_REQUEST['txtCredit4'];
  $nm5=$_REQUEST['txtName5'];
  $cd5=$_REQUEST['txtCredit5'];
  $nm6=$_REQUEST['txtName6'];
  $cd6=$_REQUEST['txtCredit6'];
  $nm7=$_REQUEST['txtName7'];
  $cd7=$_REQUEST['txtCredit7'];
  $nm8=$_REQUEST['txtName8'];
  $cd8=$_REQUEST['txtCredit8'];
  $nm9=$_REQUEST['txtName9'];
  $cd9=$_REQUEST['txtCredit9'];
  $nm10=$_REQUEST['txtName10'];
  $cd10=$_REQUEST['txtCredit10'];
  $tc=$_REQUEST['txtTotalCredit'];
  

  
  include("dbconnect.inc");
  
  @mysql_query("insert into course_detail (cname, sname1, scredit1, sname2, scredit2, sname3, scredit3, sname4, scredit4, sname5, scredit5, sname6, scredit6, sname7, scredit7, sname8, scredit8, sname9, scredit9, sname10, scredit10, tcredit) values('$co', '$nm1', '$cd1', '$nm2', '$cd2', '$nm3', '$cd3', '$nm4', '$cd4', '$nm5', '$cd5', '$nm6', '$cd6', '$nm7', '$cd7', '$nm8', '$cd8', '$nm9', '$cd9', '$nm10', '$cd10', '$tc')");
  
  echo("<h1>Thank You! You have Registered courses.</h1>");

?>
<center>
<input type="button" onClick="window.location='http://localhost/subregistration/'" class="Redirect" value="Click here to go to see the registered subjects"/>
</center>

</div>

</body>
</html>