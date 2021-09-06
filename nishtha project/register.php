<!DOCTYPE html>
<html>
<head>
	<title>
		registration page
	</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.js" rel="stylesheet">
<body>

<style>
	*{
		box-sizing: border-box;
	}
	input[type=text]{
  transition:0.5s;
  background-color: #ffdddd;
}
input[type=Email]{
  transition:0.5s;
  background-color: #ffdddd;
}
input[type=password]{
  transition:0.5s;
  background-color: #ffdddd;
}
</style>
<form id="regForm" method="post" action="signin.php">
	<div class="col-md-6" style="margin-left: 20px;"> <br>
<div class="tab">Name <br>
    <p><input type="text" placeholder="First name" oninput="this.className = ''" name="firstname">
    </p> <br>
    <p><input placeholder="Last Name" oninput="this.className = ''" name="lastname" type="text">
    </p> <br>
  </div>

  <div class="tab">Contact_info <br>
    <p><input type="Email" placeholder="Email" oninput="this.className = ''" name="email">
    </p> <br>
    <p><input placeholder="phone" oninput="this.className = ''" name="phoneno" type="text">
    </p> <br>
  </div>

  <div class="tab">Login_Info: <br>
    <p><input type="text" placeholder="Username..." oninput="this.className = ''" name="username">
    </p> <br>
    <p><input type="password" placeholder="Password..." oninput="this.className = ''" name="password">
    </p> <br>
  </div>

  <div class="tab">Place: <br>
    <p><input type="text" placeholder="state" oninput="this.className = ''" name="state">
    </p> <br>
    <p><input type="text" placeholder="city" oninput="this.className = ''" name="city">
    </p> <br>
  </div>

  <input type="submit" id="submit" value="submit" name="submit" scope="row">
</div>
</form>
</body>
</html>