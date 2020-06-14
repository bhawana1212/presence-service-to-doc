<html>
<head>
<script language="javascript">

		function show()
		{
			document.getElementById("errtxtCName").innerHTML ="";
			document.getElementById("errsubName1").innerHTML ="";
			document.getElementById("errsubCredit1").innerHTML ="";
			document.getElementById("errsubName2").innerHTML ="";
			document.getElementById("errsubCredit2").innerHTML ="";
			document.getElementById("errsubName3").innerHTML ="";
			document.getElementById("errsubCredit3").innerHTML ="";
			document.getElementById("errsubName4").innerHTML ="";
			document.getElementById("errsubCredit4").innerHTML ="";
			document.getElementById("errsubName5").innerHTML ="";
			document.getElementById("errsubCredit5").innerHTML ="";
			document.getElementById("errsubName6").innerHTML ="";
			document.getElementById("errsubCredit6").innerHTML ="";
			
			if(document.courseform.txtCourse.value=="")
			{
				document.getElementById("errtxtCName").innerHTML = "Course field cannot be left empty";
				document.courseform.txtCourse.focus();
			}
			if(document.courseform.txtName1.value=="")
			{
				document.getElementById("errsubName1").innerHTML = "Subjects name required";
				document.courseform.txtName1.focus();
			}
			if(document.courseform.txtCredit1.value=="")
			{
				document.getElementById("errsubCredit1").innerHTML = "Credit required";
				document.courseform.txtCredit1.focus(); 
			}
			
			if(document.courseform.txtName2.value=="")
			{
				document.getElementById("errsubName2").innerHTML = "Subjects name required";
				document.courseform.txtName2.focus();
			}
			if(document.courseform.txtCredit2.value=="")
			{
				document.getElementById("errsubCredit2").innerHTML = "Credit required";
				document.courseform.txtCredit2.focus(); 
			}
			
			if(document.courseform.txtName3.value=="")
			{
				document.getElementById("errsubName3").innerHTML = "Subjects name required";
				document.courseform.txtName3.focus();
			}
			if(document.courseform.txtCredit3.value=="")
			{
				document.getElementById("errsubCredit3").innerHTML = "Credit required";
				document.courseform.txtCredit3.focus(); 
			}
			
			if(document.courseform.txtName4.value=="")
			{
				document.getElementById("errsubName4").innerHTML = "Subjects name required";
				document.courseform.txtName4.focus();
			}
			if(document.custform.txtCredit4.value=="")
			{
				document.getElementById("errsubCredit4").innerHTML = "Credit required";
				document.courseform.txtCredit4.focus(); 
			}
			
			if(document.courseform.txtName5.value=="")
			{
				document.getElementById("errsubName5").innerHTML = "Subjects name required";
				document.courseform.txtName5.focus();
			}
			if(document.courseform.txtCredit5.value=="")
			{
				document.getElementById("errsubCredit5").innerHTML = "Credit required";
				document.courseform.txtCredit5.focus(); 
			}
			
			if(document.courseform.txtName6.value=="")
			{
				document.getElementById("errsubName6").innerHTML = "Subjects name required";
				document.courseform.txtName6.focus();
			}
			if(document.courseform.txtCredit6.value=="")
			{
				document.getElementById("errsubCredit6").innerHTML = "Credit required";
				document.courseform.txtCredit1.focus(); 
			}
			
			if(document.courseform.txtTotalCredit.value=="")
			{
				document.getElementById("errtxtTotalcredit").innerHTML = "Total number of credits required";
				document.courseform.txtTotalCredit.focus();
			}
			
			else
			{
				document.courseform.submit();
			}
		}

</script>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
	include("header.php");
?>

<div id="content" >
<div id="registration">
<h1 align="center" style="background: #63C" >Course Registration
</h1>
<form method="get" action="insertCourse.php" name="courseform">
<table align="center" cellspacing="16" border="0" cellpadding="2">
<tr>
	<td>Enter course name </td><td><input type="text" name="txtCourse" size="30"><span class="err" id="errtxtCName"></span></td>
</tr>
<tr>
	<td>Name of subject 1 </td><td><input type="text" name="txtName1" size="30"><span class="err" id="errsubName1"></td><td> <input type="int" name="txtCredit1" size="10"></span><span class="err" id="errsubCredit1"></span></td>
</tr>
<tr>
	<td>Name of subject 2 </td><td><input type="text" name="txtName2" size="30"><span class="err" id="errsubName"></span></td><td> <input type="text" name="txtCredit2" size="10"><span class="err" id="errsubCredit2"></td>
</tr>
<tr>
	<td>Name of subject 3 </td><td><input type="text" name="txtName3" size="30"><span class="err" id="errsubName"></span></td><td> <input type="text" name="txtCredit3" size="10"><span class="err" id="errsubCredit3"></td>
</tr>
<tr>
	<td>Name of subject 4 </td><td><input type="text" name="txtName4" size="30"><span class="err" id="errsubName"></span></td><td> <input type="text" name="txtCredit4" size="10"><span class="err" id="errsubCredit4"></td>
</tr>
<tr>
	<td>Name of subject 5 </td><td><input type="text" name="txtName5" size="30"><span class="err" id="errsubName"></span></td><td> <input type="text" name="txtCredit5" size="10"><span class="err" id="errsubCredit5"></td>
</tr>
<tr>
	<td>Name of subject 6 </td><td><input type="text" name="txtName6" size="30"><span class="err" id="errsubName"></span></td><td> <input type="text" name="txtCredit6" size="10"><span class="err" id="errsubCredit6"></td>
</tr>
<tr>
	<td>Name of subject 7 </td><td><input type="text" name="txtName7" size="30"></td><td> <input type="text" name="txtCredit7" size="10"></td>
</tr>
<tr>
	<td>Name of subject 8 </td><td><input type="text" name="txtName8" size="30"></td><td> <input type="text" name="txtCredit8" size="10"></td>
</tr>
<tr>
	<td>Name of subject 9 </td><td><input type="text" name="txtName9" size="30"></td><td> <input type="text" name="txtCredit9" size="10"></td>
</tr>
<tr>
	<td>Name of subject 10 </td><td><input type="text" name="txtName10" size="30"></td><td> <input type="text" name="txtCredit10" size="10"></td>
</tr>

<tr>
	<td>Total number of credits</td><td> <input type="text" name="txtTotalCredit" size="30"><span class="err" id="errtxtTotalcredit"></span></td>
</tr>



<tr>
	<td><input type="button" value="REGISTER" onClick="show();"><input type="reset" value="Cancel"></td><td></td>
</tr>
</table>
</form>
</div>
</div>


</body>
</html>