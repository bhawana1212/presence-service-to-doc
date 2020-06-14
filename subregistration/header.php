<?php 
	if(session_id()=="")
	session_start();
?>

  <div id="logout" align="right">
            <?php
        		if(isset($_SESSION['usr']))
					{
					  echo "Hello! ".$_SESSION['usr'];
					  echo "&nbsp; &nbsp";
					  echo "<a href='LogOut.php'>Logout</a>";
					}
				
						
			?>
     </div><!--closing of logout-->
    
