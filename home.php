<?php


session_start();

if(!isset($_SESSION['username'])){
	header('location:login.php');
}


?>
<html>
<head>
	<title> Home Page</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<style>
	
	body{
	background:url("image.jpg");
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
a{
	color:#fff !important;
	margin-top: -200px !important;

}

h1{
	color:#fff !important;
	margin-top: 200px !important;
	text-align: center;
	text-transform: uppercase;
}



</style>
</head>
<body>
<div class="container">

<a class="float-right" href="logout.php"> Logout </a>

	
<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>

</body>
</html>