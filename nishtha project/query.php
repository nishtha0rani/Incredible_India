
<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
			<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
		*{
			margin:0;
			padding:0;
		}
		body{
	  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('service.jpg');
	  background-size:cover;
	  background-position:center;
	  	}
	.contact-section{
			background:url('service.jpg') no-repeat center;
			background-size: cover;
			padding: 40px 0;
		}
		.contact-section h1{
			text-align: center;
			color:#000;
			font-size: 35px;
		}
		.border{
			width:100px;
			height:10px;
			background:#34495e;
			margin:40px auto;
		}
		.contact-form{
			max-width: 600px;
			margin: auto;
			padding: 0 10px;
			overflow: hidden;
		}
		.contact-form-text{
			display: block;
			width: 600px;
			box-sizing: border-box;
			margin: 16px 0;
			margin-left: 50%;
			transform: translate(-50% ,-50%);
			border:0;
			background:#111;
			padding: 20px 40px;
			outline:none;
			color:#ddd;
			transition: 0.5s;
		}
		.contact-form-text:focus{
			box-shadow:0 0 10px 4px #34495e;
		}
		textarea.contact-form-text{
			resize:none;
			height:120px;
		}
		.contact-form-btn{
			float:right;
			border:0;
			background: #34495e;
			color:#fff;
			padding:12px 50px;
			border-radius: 20px;
			cursor: pointer;
			transition: 0.5s;
		}
		.contact-form-btn:hover{
			background:#2980b9;
		}
		.container{
		background-color:#000;
		max-width: 100%; 
}
.row .col-lg-2 h1{
          color:red;
          font-size:20px;
          margin-left:50px;
          margin-top: 20px;
}
.row .col-lg-2 ul{
	margin-left:50px;
}
.col-lg-2 p{
	color:#fff;
	letter-spacing: 2px;
}
.col-lg-4 h4{
	font-size:25px; 
	margin-left: 120px; 
	margin-top: 20px;
	color:#fff;
}
.col-lg-4  button{
	margin-left: 20px; 
	color:#000;
	background-color: #fff;
}
.form-control{
	margin-left: 40px;
}
.col-lg-4  .fa-facebook{
    margin-left: 40px;
} 

		
	</style>
</head>
<body>	
	<div class="contact-section">
		<h1>Contact US</h1>
		<div class="border"></div>
<form class="contact-from" action="queryphp.php" method="post">
	Name:<input type="text" class="contact-form-text" placeholder="Your Query" name="query"><br>
	<textarea class="contact-form-text" placeholder="Your Messge" name="message"></textarea>
   <input type="Submit" class="contact-form-text" value="SEND">
</form>
</div>
</body>
</html>