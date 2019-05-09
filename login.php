<!DOCTYPE html>
<html>
<head>
	<title> User Login and Registration</title>


<style>
	
	body{
	background:url("abc.jpg");
	background-size:cover;
	background-position:center;
}


.login-box{
	max-width: 700px;
	float: none;
	margin: 150px auto;
}


.login-left{
	background: rgba(211,211,211,0.5);
	padding: 30px;
}

.login-right{
	background: rgba(211,211,211,0.5);
	padding: 30px;
}

.form-control{
	background-color: transparent  !important; 
}


</style>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">
	<div class="login-box">
   <div class="row">
   	<div class="col-md-6 login-left" >
   		<h2> Login Here </h2>
   		<form action="validation.php" method="post">
   			<div class="form-group">
   				<label>UserName</label>
   				<input type="text" name="user" class="form-control" required>
   			 </div>
   			 <div class="form-group">
   				<label>Password</label>
   				<input type="password" name="password" class="form-control" required>
   			 </div>
   			 <button type="submit" class="btn btn-primary">Login </button>
   		</form>
   
 </div>

	<div class="col-md-6 login-right" >
   		<h2> Register Here </h2>
   		<form action="register.php" method="post">
   			<div class="form-group">
   				<label>UserName</label>
   				<input type="text" name="user" class="form-control" required>
   			 </div>
   			 <div class="form-group">
   				<label>Password</label>
   				<input type="password" name="password" class="form-control" required>
   			 </div>
   			 <button type="submit" class="btn btn-primary">Register </button>
   		</form>
   
 </div>

</div>
</div>
</body>
</html>