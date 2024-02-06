<?php
$userName = '';
$show = '';
if(!empty($_SESSION['userid']) && $_SESSION['userid']) {
	$userName =  $_SESSION['username'];		
} else {
	$show = 'hidden';
}
?>	
<br>
<span><a href="index.php">Home</span>
<div id="loggedPanel" class="<?php echo $show; ?>">
	Logged in as <span id="loggedUser" class="logged-user"><?php echo $userName; ?></span><br>
	<a href="action.php?action=logout">Logout</a>
</div>
<br><br><br>