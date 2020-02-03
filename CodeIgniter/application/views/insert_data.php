<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br><br>
		<h1>Insert Data Using CodeIgniter</h1> <br><br>
		<form method="post" action="<?php echo base_url();?>index.php/Questions/form_validation">
			<?php 
				if ($this->uri->segment(2) == "inserted") {
					# code...
					echo '<p class="text-success">Data Inserted</p>';
				}
			?>
			<ul class="nav nav-tabs">
				<li class="nav-item">
					
				</li>
			</ul>

			<div class="form-group">
				<div class="form-group">
					<label>FirstName</label>
					<input type="text" name="first_name" class="form-control" />
					<span class="text-danger"><?php echo form_error("first_name") ?></span> </br>
				</div>

				<div class="form-group">
					<label>LastName</label>
					<input type="text" name="last_name" class="form-control" />
					<span class="text-danger"><?php echo form_error("last_name") ?></span> </br>
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" /> </br>
				</div>

				<div class="form-group">
					<label>Mobile Number</label>
					<input type="text" name="mobile_number" class="form-control" /> </br>
				</div>

				<div class="form-group">
					<input type="submit" name="insert" value="Submit" class="btn btn-info" /> </br>
				</div>

			</div>
		</form>
	</div>
</body>
</html>