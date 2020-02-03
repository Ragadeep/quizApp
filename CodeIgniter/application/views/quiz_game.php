<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Quiz</title>

	
</head>
<body>

<div id="container">
	<h1>Welcome to Quiz!</h1>

	<form method="" action="<?php echo base_url();?>index.php/Questions/quizdisplay">
		<input type="submit" value="Start" name="">
	</form>

	<br><br>
	<form method="" action="<?php echo base_url();?>index.php/Questions/insertdata">
		<input type="submit" value="insert" name="">
	</form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>