<!DOCTYPE html>
<!-- navbar module -->
<?php $this->load->view('includes/navbar', array('active' => "add")); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Study Buddy</title>

    <!-- Bootstrap -->
    <link href="../../assets/css/login.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    
  </head>
	<body>
	
		<div class="container">
		<!--
		<div class="page-header">
  			<h1>Study Buddy </br><small>Study session organizer...</small></h1>
		</div>
		
	-->
		<div class="row">
			<div class="well col-xs-9 col-md-5 pull-right">
				<h3>Please login</h3>
				<?php echo validation_errors(); ?>
   				<?php echo form_open('verifylogin'); ?>
				<hr>
				<ul>
					<li>
						<label for="emial">Email</label><input class="form-control" type="text" id="email" name="email" placeholder="exampl@spu.edu"></br>
					</li>
					<li>
						<label for="password" >Password</label><input class="form-control" type="password" id="password" name="password" placeholder="password"></br>
					</li>
					<li>
						<input type="submit" value="Login"/>
					</li>
				<?php echo form_close(); ?>
			</div>
		</div>
		</div>
		


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../assets/js/bootstrap.min.js"></script>
  </body>
</html>