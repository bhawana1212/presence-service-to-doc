
<html>
<body>

<div id="content" >

<?php
  
  $nm=$_REQUEST['txtName'];
  $sr=$_REQUEST['txtSurname'];
  $pn=$_REQUEST['txtPhone'];
  $add=$_REQUEST['txtAddress'];
  $city=$_REQUEST['txtCity'];
  $mail=$_REQUEST['txtMail'];
  $gn=$_REQUEST['gender'];
  $dob=$_REQUEST['dob'];
  $usernm=$_REQUEST['txtUserName'];
  $pwd=$_REQUEST['Password'];

  
  include("dbconnect.inc");
  
  @mysql_query("insert into student_detail (sname, ssurname, sphone, saddress, scity, smail, sgender, sdob, username, userpass, usertype, jdate) values('$nm', '$sr', '$pn', '$add', '$city', '$mail', '$gn', '$dob', '$usernm', '$pwd', 'user', now())");
  
  echo("<h1>Thank You! You have been Registered.</h1>");

?>
<center>
<input type="button" onclick="window.location='http://localhost/subregistration/'" class="Redirect" value="Click here to go to login page"/>
</center>

</div>

</body>
</html>