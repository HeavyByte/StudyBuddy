<!DOCTYPE html>
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

		<div class="row">
			<div class="well col-xs-9 col-md-9 ">
				<h3>Thank you for registering with us</h3>
				<hr/>
				<?php echo validation_errors(); ?>
   				<?php echo form_open('verifyemail'); ?>
				<table>
					<tr>
						<p>Please check your @university.edu email for a validation code</p>
					</tr>
					<tr>
						<td>
						<label for="emial">Email</label>
							<input class="form-control" type="text" id="email" name="email" placeholder="exampl@spu.edu"></br>
						</td>
					</tr>
					<tr>
						<td>
						<label for="valcode">Validation Code</label>
						<div class="col-xs-8 col-md-8 col-lg-8" style="padding-left: 0;">
							<input class="form-control" type="text" id="valcode" name="valcode"  placeholder="ABC123"></br>
						</div>
						</td>
					</tr>
					<tr>
						<td>
						<button type="submit" class="btn btn-default" value="Confirm">Confirm</button>
						</td>
					</tr>
				</table>
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