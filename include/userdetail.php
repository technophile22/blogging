<?php
$username=$_SESSION['username'];
?>

<ul class="nav navbar-nav">
		 <li><a href=<?php echo $newpost_url ?> >
		 		<span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true">New</span>
		 	</a>
		 </li>

        <li>
        	<a href=<?php echo $profile_url; echo "?user=".$username; ?> >
        		Hello <?php echo "$username" ?>
        	</a>
        </li>

        <li>
        	<a href=<?php echo $logout_url ?> >
        		<span class="glyphicon glyphicon glyphicon-off" aria-hidden="true">Logout</span>
        	</a>
        </li>
 </ul>
