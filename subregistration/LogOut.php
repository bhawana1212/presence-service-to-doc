<?php session_start();?><head>
 <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>


<div id="logout">
             <?php
        		unset($_SESSION['usr']);
				
				session_destroy();
				header("location:index.php");
			?>
				
</div>