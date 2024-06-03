<!DOCTYPE html>
<html>
<head>
	<title>SCADS</title>
    <link rel="icon" type="image/x-icon" href="../../assets/images/favicon.ico">
	<style>
	
		html {
  				height: 100%;
		}
		body {
			background: linear-gradient(to bottom, #14051d, #333);
			font-family: Arial, sans-serif;
		}
		
		form {
			background-color: #333;
			border-radius: 10px;
			padding: 20px;
			margin: 50px auto;
			width: 300px;
		}
		
		input[type="text"], input[type="password"] {
			background-color: #ddd;
			border: none;
			border-radius: 5px;
			box-sizing: border-box;
			font-size: 16px;
			margin-bottom: 10px;
			padding: 10px;
			width: 100%;
            text-align: center;
		}
		
		input[type="submit"] {
			background-color: #4CAF50;
			border: none;
			border-radius: 5px;
			color: #000;
			cursor: pointer;
			font-size: 16px;
			padding: 10px;
			width: 100%;
		}

        .center {
            text-align: center;
            font-size:16px;
			font-weight: bold;
			color: #c7c7c7;
        }
		
		.button {
  			background-color: #4CAF50; /* Green */
  			border: none;
			color: white;
			padding: 16px 84px;
  			display: flex;
  			justify-content: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: auto;
			transition-duration: 0.4s;
			cursor: pointer;
			border-radius: 8px;
		}

		.button1 {
			background-color: #333; 
			color: white; 
			border: 2px solid #4CAF50;
	 	}	
		.button1:hover {
			background-color: #4CAF50;
			color: black;
}
		div {
			padding-top: 10px;

			}	

	</style>
</head>
<body>
	<form>
		
        <div class="image">

      <img src="../../assets/images/logo.png" alt="SCADS"
	  width="320" 
     height="80" />


</div>
<div class="center">
    <p> "<COMMUNITY_NAME>" </p>
</div>
<div>
	
<a class="button button1" style="text-align:center" href="./actionpage/login.php" <style="margin-bottom:20px;">Login</a> 
			</div>

<div><center>
<a class="button button1" style="text-align:center" href="./actionpage/registration.php" >Register</a>
		</center></div>
	</form>
	
</body>
</html>
