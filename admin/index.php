<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png"/>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

 	<script src="../assets/js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>


	<!--Pulling Awesome Font -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<title>ADMIN-SIMPEL TEGALMUNJUL</title>
	
</head>
	<style>
		body
		{
			background-image: url('../assets/img/gapura.jpg');
			background-size: cover;
		}
	</style>
<body>
	<div class="container" >
    <div class="row">
        <div class="col-md-offset-4 col-md-4 box-login-adm">

        	<?php include '../proses/prosesloginadmin.php'; ?>

            <form action="" method="post">
            	<div class="form-login">
	            <h4>Silahkan Masuk</h4>
	            <input type="text" name="nip-admin" id="userName" class="form-control input-sm chat-input" placeholder="NIP" />
	            </br>
	            <input type="password" name="inp-pass" id="userPassword" class="form-control input-sm chat-input" placeholder="Password" />
	            </br>
	            <div class="wrapper">
	            <span class="group-btn">     
	                <button type="submit" class="btn btn-danger btn-md"><i class="fa fa-sign-in"></i> Login </button>
	            </span>
	            </div>
	            </div>
            </form>
        
        </div>
    </div>
	</div>
</body>
</html>