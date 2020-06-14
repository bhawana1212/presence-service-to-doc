<html>
<head>
<script language="javascript">

		function show()
		{
			document.getElementById("errtxtName").innerHTML ="";
			document.getElementById("errtxtSurname").innerHTML ="";
			document.getElementById("errtxtPhone").innerHTML ="";
			document.getElementById("errgender").innerHTML ="";
			document.getElementById("errdob").innerHTML ="";
			document.getElementById("errtxtUserName").innerHTML ="";
			document.getElementById("errpassword").innerHTML ="";
			if(document.custform.txtName.value=="")
			{
				document.getElementById("errtxtName").innerHTML = "Name field cannot be left empty";
				document.custform.txtName.focus();
			}
			if(document.custform.txtSurname.value=="")
			{
				document.getElementById("errtxtSurname").innerHTML = "Surname field cannot be left empty";
				document.custform.txtSurname.focus();
			}
			if(document.custform.txtPhone.value=="")
			{
				document.getElementById("errtxtPhone").innerHTML = "Phone field cannot be left empty";
				document.custform.txtPhone.focus();
			}
			if(document.custform.txtAddress.value=="")
			{
				document.getElementById("errtxtAddress").innerHTML = "Address field cannot be left empty";
				document.custform.txtAddress.focus();
			}
			if(document.custform.gender.value=="")
			{
				document.getElementById("errgender").innerHTML = "Gender field cannot be left empty";
				document.custform.gender.focus();
			}
			if(document.custform.dob.value=="")
			{
				document.getElementById("errdob").innerHTML = "DateOfBirth field cannot be left empty";
				document.custform.dob.focus();
			}
			if(document.custform.txtUserName.value=="")
			{
				document.getElementById("errtxtUserName").innerHTML = "Username cannot be left empty";
				document.custform.txtUserName.focus();
			}
			if(document.custform.Password.value=="")
			{
				document.getElementById("errpassword").innerHTML = "Password cannot be left empty";
				document.custform.Password.focus();
			}
			 else if(document.custform.Password.value.length>10)
			{
				document.getElementById("errpassword").innerHTML = "Maximum 10 characters";
				document.custform.Password.focus(); 
			}
			else
			{
				document.custform.submit();
			}
		}

</script>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>


<div id="content" >
<div id="registration">
<h1 align="center" style="background: #63C" >Registration Form
</h1>
<form method="get" action="insertStudent.php" name="custform">
<table align="center" cellspacing="16" border="0" cellpadding="2">
<tr>
	<td>Enter Name </td><td><input type="text" name="txtName" size="30"><span class="err" id="errtxtName"></span></td>
</tr>
<tr>
	<td>Surname</td><td> <input type="text" name="txtSurname" size="30"><span class="err" id="errtxtSurname"></span></td>
</tr>
<tr>
	<td>Enter Phone no.</td><td> <input type="text" name="txtPhone" size="30"><span class="err" id="errtxtPhone"></span></td>
</tr>
<tr>
	<td>Enter Address</td><td> <textarea name="txtAddress" ></textarea><span class="err" id="errtxtAddress"></span></td>
</tr>
<tr>
	<td>Enter City</td><td> <input type="text" name="txtCity" size="30"></td>
</tr>
<tr>
	<td>Enter e-mail Id</td><td> <textarea name="txtMail"></textarea></td>
</tr>
<tr>
	<td>Choose Gender</td><td> <input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female
    <span class="err" id="errgender"></span></td>
</tr>
<tr>
	<td>Date Of Birth</td><td> <input type="date" name="dob" size="30"><span class="err" id="errdob"></span></td>
</tr>
<tr>
	<td>User Name</td><td> <input type="text" name="txtUserName" size="30"><span class="err" id="errtxtUserName"></span></td>
</tr>
<tr>
	<td>Enter Password</td><td><input type="password" name="Password"placeholder="Maximum 10 characters" size="30">
    <span class="err" id="errpassword"></span></td>
</tr>
<tr>
	<td><input type="button" value="OK" onClick="show();"><input type="reset" value="Cancel"></td><td></td>
</tr>
</table>
</form>
</div>
</div>


</body>
</html>