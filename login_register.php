
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<!-- Google Fonts -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

		<!-- CSS Reset -->
		<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">

		<!-- Milligram CSS minified -->
		<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css"
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/pokeballicon.ico">
    <title>OverRateIt | It Could Be Overrateit</title>
  </head>
</head>
<body>
    <?php
    include("inc/nav-bar.php");
    ?>
    <div id="Login_Register">
    	<div id="Login">
        	<h1>Login</h1>
        <div id="InputBack">
      <form method="post" name="login">
  			<div id="InputFields">
  				<label>E-mail</label>
  				<input id="input-EMail" type="text" placeholder="E-mail..." name="Email" class="form-control" required>
  				<label>Password</label>
  				<input id="input-password" type="text" placeholder="Password..." name="password" class="form-control" required>
  				<label>Remember?</label>
  				<input id="RememberPass" type="checkbox" name="RememberPass">
  				<br>
  				<input type="submit" value="Submit" class="btn button">
  			</div>
    </form>
		</div>
    	</div>
    	<div id="Register">
        	<h1>Register</h1>
        <div id="InputBack">
          <form method="post" name="register">
      			<div id="InputFields">
      				<label>Battletag</label>
      				<input id="input-Battletag" type="text" placeholder="Battletag..." name="Battletag" class="form-control" required>
      				<label>E-Mail</label>
      				<input id="input-E-Mail" type="text" placeholder="E-mail..." name="E-Mail" class="form-control" required>
      				<label>Confirm E-Mail</label>
      				<input id="input-Con-E-Mail" type="text" placeholder="Confirm E-mail..." name="Con-E-Mail" class="form-control" required>
      				<label>Password</label>
      				<input id="input-Pass" type="text" name="Pass" placeholder="Password..." class="form-control" required>
      				<label>Confirm Password</label>
      				<input id="input-Con-Pass" type="text" name="Con-Pass" placeholder="Confirm Password..." class="form-control" required>
      				<label>Terms&Agree</label>
      				<input id="TermsAndAgree" type="checkbox" name="TermsAndAgree">
      				<br>
      				<input type="submit" value="Submit" class="btn button">
      			</div>
        </form>
			</div>
		</div>
    </div>
</body>
</html>
