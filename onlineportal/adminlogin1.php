
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body
		{
			background-image: url("Blue.png");
		     background-size: cover;
		     width: 80%;
		     margin: 150px;
		}
		form
		{
			width: 30%;
			position:relative;
			margin: 20px;

			
		    
		}
		fieldset
		{
			background-color: aliceblue;
		}
		#circle
		{
			width: 200px;
			height: 200px;
			background-color: white;
			border-radius: 50%;
			border-style: solid;
			border-width: 2px;
		}

         a 
        {
               text-decoration: none;
             display: inline-block;
             padding: 8px 16px;
          }
               .previous
                {
                background-color: #f1f1f1;
          }
          .button
          {
          	position: absolute;
          	right: 50px;
          	bottom: 50px;
          }


		
	</style>
	<script type="text/javascript">
		function validateform()
		{
			var username=document.myform.username.value;
			var password=document.myform.password.value;

			if(username==null || username=="")
			{
				alert("username cant be blank");
				return false;

			}
			else if(password==null || password=="")
			{
				alert("password cant be blank");
				return false;

			}
		}
			

	</script>
</head>
<body>
<center><h2>Admin Login</h2>
<form name="myform"  onsubmit="return validateform()" action="adminlogin.php" method="POST">
	<fieldset >
		<div class="circle">
	 <b>Enter your Username:</b><input type="text" name="username"><br/><br/>
	 <b>Enter your Password:</b><input type="password" name="password"/><br/><br/>
	 <input type="submit"  value="login">
	</div>

    


</fieldset>
	
</form>
</center>
<div class="button">
<a href="index.php" class="previous">&laquo; Back</a>
</div>
</body>

</html>