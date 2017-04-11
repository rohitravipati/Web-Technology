<?php include("myphp.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Coocies</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Integral core stylesheet -->
<link href="css/integral-core.css" rel="stylesheet">
<!-- /integral core stylesheet -->

<link href="css/integral-forms.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

</head>
<body >
<div class="container">
       <div class="main-content">
		<h1 class="page-title">Create your profile</h1>
		<!-- Breadcrumb -->
		
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title"></h4>
					</div>
					<div class="panel-body">
						 <form method="post" action="">
							<div class="form-group"> 
								<label for="first_name">First Name</label> 
								<input type="text" name="first_name" placeholder="First Name" class="form-control" required> 
							</div>
							<div class="form-group"> 
								<label for="last_name">Last Name</label> 
								<input type="text" name="last_name" placeholder="Last Name" class="form-control" required> 
							</div>
							  <div class="form-group">
								<label for="emailaddress">Email address</label>
								<input type="email" class="form-control" id="email_address" name="email_address" placeholder="Email" required>
							  </div>
							  <div class="form-group">
								<label for="About-Me">About Me</label>
								<textarea name="about_me" placeholder="About Me" class="form-control" required></textarea>
							  </div>
							  <div class="checkbox">
								<label><input type="hidden" name="check" value= 0 ></label>
								<label><input type="checkbox" name="check" value= 1 >Remember</label>
							  </div>
							  <button type="submit" name="click" class="btn btn-primary">Create Profile</button>
						</form>
					</div>
					<div class="panel-body">
					
				</div>
				</div>
			</div>
			
			<div class="col-lg-6">
			<div class="">
				<div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Welcome! </strong>
    you can successfully create your profile"
</div>
					<!-- Card -->
					<div class="card">
					<!-- Card action dropdown -->
						<form name="myform" id ="myform" method="post"  action="">
						<label for="first_name">Change Theme Color :</label> 
						<select style="color: black" id="sel_color" name="sel_color"  onchange="submitform();">
							<option value="">Select Color</option>
							<option value="blue">Blue </option> 
							<option value="orange">Orange</option> 
							<option value="yellow">Yellow </option>                   
						</select>

						</form>
							<!-- /card action dropdown -->
						<!-- Card header -->
						<div class="card-header " style="background-color: <?php echo $_COOKIE['theme_color']; ?>">
						
							<!-- Card photo 
							<div class="card-photo">
								<img title="Alex Dolgove" alt="Alex Dolgove" src="images/alex-dolgove.png" class="img-circle avatar size-105">						
							</div>
							<!-- /card photo -->
							
							<!-- Card short description -->
							<div class="card-short-description ">
								<div class="row">
									<h5 class="col-lg-6">First Name: </h5><h5 class="col-lg-6"><?php echo  $_COOKIE['first']; ?></h5>
									<h5 class="col-lg-6">Last Name: </h5><h5 class="col-lg-6"><?php echo $_COOKIE['last']; ?></h5>
									<h5 class="col-lg-6">Email: </h5><h5 class="col-lg-6"><?php echo  $_COOKIE['email']; ?></h5>
								</div>
								
								
							</div>
							
						</div>
						<!-- /card header -->
						
						<!-- Card content -->
						<div class="card-content">
							<p class="badges"><span class="badge badge-bordered">About Me</span></p>
							<p><?php echo  $_COOKIE['me']; ?></p>
						</div>
						<!-- /card content -->
					</div>
					<!-- /card -->
					
					
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/metismenu/js/jquery.metisMenu.js"></script>
<script src="script/msg.js">

</script>

</body>
</html>
