
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<style type="text/css">
		body
		{
			background-image: url("Blue.png");
		     background-size: cover;
		     margin-left: ;

		} 
		form
		{
			width: 35%;

			background-color: white;
			text-align: center;

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
			var firstname=document.myform.firstname.value;
			var lastname=document.myform.lastname.value;
			
			var dateofbirth=document.myform.dateofbirth.value;
			

			var x=document.myform.email.value;
			var atposition=x.indexOf("@");
			var dotposition=x.lastIndexOf(".");

			var address=document.myform.address.value;

			var num=document.myform.num.value;
            
            var username=document.myform.username.value;

			var firstpassword=document.myform.password.value;
			var secondpassword=document.myform.password2.value;


			if(firstname==null || firstname=="")
			{
				alert("firstname cant be blank");
				return false;

			}
			else if(lastname==null || lastname=="")
			{
				alert("lastname cant be blank");
				return false;

			}
			else if(isNaN(dateofbirth))
			{
				document.getElementById("numloc").innerHTML="enter numeric value only";
				return false;
			}
			
 
			 else if(atposition<1 || dotposition<atposition +2 ||dotposition+2>=x.length)
			{
				alert("please enter a valid email address\n atposition:"+atposition+"\n dotposition:"+dotposition);
				return false;
			}
			else if(address==null || address=="")
			{
				alert("address cant be blank");
				return false;

			}
			 else if(isNaN(num))
			{
				document.getElementById("numloc").innerHTML="enter numeric value only";
				return false;
			}
			else if
			{
				alert("username cant be blank");
				return false;
			}
			
			else if(firstpassword==secondpassword)
			{
				return true;
			}
			else
			{
				alert("password must be same!");
				return false;
			}
		}
	</script>
</head>
<body>
	
	<center>
	<h1> Student Registration </h1>
	</center>
	
	<center>
<form name="myform"  onsubmit="return validateform()" action="studentregistration.php" method="POST">
	<fieldset>
	
       <br><br>First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="firstname"><br/><br/>

       Last name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lastname"><br/><br/>

	  DOB:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="dateofbirth"><span id="numloc"></span><br/><br/>

	  Qualification:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select type="text" value="" name="subject">
	  	<option>select</option>
	  	<option>B.tech</option>
	  	<option>BBA</option>
	  	<option>BSC</option>
	  	<option>B.com</option>
	  	<option>BCA</option>
	  	<option>other</option>



	  </select><br><br>
	  Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="gender" name="gender" value="male">Male
	  <input type="radio" id="gender" name="gender" value="female">Female
	  <br><br>
  	   Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email"><br/><br/>

  	   Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address"><br/><br/>

  	   Contact:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="num"><span id="numloc"></span><br/><br/>

  	   Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username"><br/><br/>

  	   Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password"/><br/><br/>
	   Confirm Password:&nbsp;<input type="password" name="password2"/><br/><br/>
	  
		<input type="submit" ><br><br>
		<div>If already registered:<a href="studentlogin1.php">Login</a></div>
	
	
	</fieldset>
	</form>
</center>
<div class="button">
<a href="index.php" class="previous">&laquo; Back</a>

</div>
</body>
</html>

	

