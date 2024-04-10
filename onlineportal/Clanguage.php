<?php
include "login_connection.php";
session_start();
?>
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
			background-position: center;
			background-repeat: no-repeat;
			margin: 0;
			/*to remove default body margin*/
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			/* to center the form vertically*/
			font-family: arial,sans-serif;
		}
		.container 
		{
			background-color: aliceblue;
			padding: 10px;
			border-radius: 40px ;
			margin-top: 25px;
		}
		.form 
		{
			text-align: center;
			max-width: 500px;
			/* limit the width of the form*/
			margin: 0 auto;
			/*center the form horizontally */

		}
		.form textarea 
		{
			width: 400px;
			height: 100px;
			margin-bottom: 20px;
			padding: 10px;
			font-size: 16px;
			margin-left: -90px;

		}
		button
		{
          background: #3897f0;
          color: #fff;
          font-size: xx-large;
          height: 60px;
          width: 285px;
          border-radius: 15px;
          cursor: pointer;
          transition: background 0.4s ease-in-out;
		}

		button:hover
		{
       background: darkblue;
		}
		::placeholder
		{
			font-size: x-large;
		}
		/* while writing error shows*/
		.error
		{
	       border-radius: 40px;
	       transition:  background 0.4s ease-in-out;
	       background-color: lightcoral;
	       text-align: center;
	       padding: 10px;
	       font-size: large;

		}
		.error:hover

		{
			background: red;
		}

	</style>
	<script type="text/javascript">
		function preback()
		{
			window.history.forward();
		}
		setTimer("preback()",0);
		
		function validateform()
		{
			return confirm("Are you sure you want to submit Questions?");
		}
	</script>
</head>
<body>
	<?php  
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
         $blank = false;
         $questions = $_POST['questions'];
         if($questions > 0)
         {
         	$sql = "INSERT INTO 'clanguage' ('questions') values('$questions);";
         		$result = mysqli_query($con,$sql);
         		header("location:mcq.php");
         }
         else
         {
         	$blank = true;
         }
         if($blank)
         {
         	echo "<div class='error'>"."blank input not allowed.press submit button after entering question!" ."</div>";
         }
		}
		?>
/*
<!--
Q.1 Who is the father of C language?<br>
<input type="radio" name="question1">a)Steve Jobs<br>
<input type="radio" name="question1">b)James Gosling<br>
<input type="radio" name="question1">c)Dennis Ritchie<br>
<input type="radio" name="question1">d)Rasmus Lerdorf<br><br>

Q.2 All keywords in C are in_____<br>
<input type="radio" name="question2">a)lowercase letters<br>
<input type="radio" name="question2">b)Uppercase letters<br>
<input type="radio" name="question2">c)Camelcase letters<br>
<input type="radio" name="question2">d)None of the mentioned<br><br>

Q.3 Which of the following cannot be a variable name in C ?<br>
<input type="radio" name="question3">a)volatile<br>
<input type="radio" name="question3">b)true<br>
<input type="radio" name="question3">c)friend<br>
<input type="radio" name="question3">d)export<br><br>

Q.4 What is an example of iteration in C?<br>
<input type="radio" name="question4">a)for<br>
<input type="radio" name="question4">b)while<br>
<input type="radio" name="question4">c)dowhile<br>
<input type="radio" name="question4">d)all of the above<br><br>

Q.5 What is #include< stdio.h>?<br>
<input type="radio" name="question5">a)preprocessor directive<br>
<input type="radio" name="question5">b)inclusion directive<br>
<input type="radio" name="question5">c)file inclusion directive<br>
<input type="radio" name="question5">d)none of the above<br><br>

Q.6 What is sizeof(char) in a 32-bit C compiler? <br>
<input type="radio" name="question6">a)1 bit<br>
<input type="radio" name="question6">b)2 bits<br>
<input type="radio" name="question6">c)1 byte<br>
<input type="radio" name="question6">d) 2 bytes<br><br>

Q.7 The C-preprocessors are specified with _____ symbol.<br>
<input type="radio" name="question7">a)#<br>
<input type="radio" name="question7">b)$<br>
<input type="radio" name="question7">c)" "<br>
<input type="radio" name="question7">d)&<br><br>

Q.8 Which is valid C expression? <br>
<input type="radio" name="question8">a)int my_num = 100,000;<br>
<input type="radio" name="question8">b)int my_num = 100000;<br>
<input type="radio" name="question8">c)int my num = 100000;<br>
<input type="radio" name="question8">d)int $my_num = 100000;<br><br>

Q.9 Which of the following is not a valid C variable name?<br>
<input type="radio" name="question9">a)int number;<br>
<input type="radio" name="question9">b)float rate;<br>
<input type="radio" name="question9">c)int variable_count;<br>
<input type="radio" name="question9">d)int $main;<br><br>

Q.10 Which of the following are C processors? <br>
<input type="radio" name="question10">a)#ifdef<br>
<input type="radio" name="question10">b)#define<br>
<input type="radio" name="question10">c)#endif<br>
<input type="radio" name="question10">d)all of the above<br><br>
-->*/

<div class="container">

<div class="form">
	<h2>Enter C question and click on submit</h2>
	<form action="login_connection.php" method="post" onsubmit="return validateform()">
		<div class="form-floating">
			<textarea class="form-control" placeholder="enter your question here" id="floatingTextarea" name="questions"></textarea>
		</div><br>
		<div>
			<button>submit</button><br>
		</div>
	
</form>
</div>
</div>


</body>
</html>
