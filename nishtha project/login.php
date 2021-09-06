<html>
<head>
<title>sign up page</title>
<style>
#msg {
	visibility:hidden;
	min-width:250px;
	background-color:yellow;
	color:#000;
	text-align:center;
	border-radius:2px;
	padding:16px;
	position:fixed;
	z-index:1;
	right:30%;
	top:30px;
	font-size:17px;
	margin-right:30px;
	}
#msg.show{
	visibility:visible;
	-webkit-animation:fadein .5s,fadeout 0.5s,2.5s;
	animation:fadein .5s,fadeout 0.5s,2.5s;
	}
@-webkit-keyframes fadein{
	from{top:0; opacity:0;}
	to{top:30; opacity:1;}
	}
@keyframes fadein{
	from{top:0; opacity:0;}
	to{top:30; opacity:1;}
	}
@-webkit-keyframes fadeout{
	from{top:30; opacity:1;}
	to{top:0; opacity0;}
	}
@keyframes fadeout{
	from{top:30; opacity:1;}
	to{top:0; opacity0;}
	}
	
body{
	font-family:Tahona, Verdana;
	color:#fff;
	background:url(hhh.png);
	background-size:cover;
}
.signup{
	background:rgba(44,62,80,0.7);
	padding:100px;
	width:250px;
	margin:auto;
	margin-top:80px;
	height:400px;
	margin-left:400px;
}
form{
	width:240px;
	text-align:center;
}
input{
	width:240px;
	text-align:center;
	background:transparent;
	border:none;
	border-bottom:1px solid #fff;
	font-family:'play' sans-serif;
	font-size:16px;
	font-weight:200px;
	padding:10px 0;
	transition:border 0.5s;
	outline:none;
	color:#fff;
}
input[type=button]{
	width:240px;
	background:white;
	border:none;
	font-size:16px;
	line-height:10px;
	border-radius:10px;
	cursor:pointer;
	padding:10px 0;
	color:#000;
}
input[type=button]:hover{
	color:#fff;
	background-color:black;
}
::placeholder{
	color:blue;
	opacity:2.5s;
}
</style>
<link href="https://fonts.googleapis.com/css?family=play" rel="stylesheet">
</head>
<body>
<div class="signup">
<form>
<h2 style="color:white" "margin-top:0px;"> Sign Up </h2>
<input type="text" name="Username" placeholder="First Name"> <br> <br>
<input type="text" name="Username" placeholder="Last Name"> <br> <br>
<input type="password" name="Pass" placeholder="Password"> <br> <br>
<input type="password" name="Pass" placeholder=" Confirm Password"> <br> <br>
<input type="text" name="Username" placeholder="E-mail address"> <br> <br>
<input type="button" value="Sign Up" onclick="myfunction()"> <br> <br>
<div id="msg"> Congratulations You have Sign Up Successfully !!</div>
<script>
function myfunction(){
	var x =document.getElementById("msg");
	x.className="show";
	setTimeout(function(){x.classname=
	x.className.replace("show","");},3000);
	}
</script>
Already Have An Account? <a href="logiin page.html" style="text-decoration:none; font-family:'play',sans-serif; color:yellow;"> &nbsp; Log In </a>
</form>
</div>
</body>
</html>