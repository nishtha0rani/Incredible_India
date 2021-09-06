
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.js" rel="stylesheet">

<style>
  *{
    box-sizing: border-box;
  }
body {
  background-color: #f1f1f1;
}
#regForm {
  background-color:rgba(0,0,0,0.6);
  margin-left:700px;
  margin-top: 50px;
  font-family: Raleway;
  padding: 40px;
  width: 30%;
  min-width: 300px;
   box-shadow: 2px 2px 2px grey;
}

h1 {
  text-align: center;  
  color: #fff;
}
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
input[type=text]{
  transition:0.5s;
  background-color: #ffdddd;
}
input[type=pwrd]{
  transition:0.5s;
  background-color: #ffdddd;
}
input.invalid {
  background-color: red;
}

/* Hide all steps by default: */
.tab {
  display: none;
  font-family: Cursive;
  color:white;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
#footer {
  background-color: grey;
  border-style:groove;
  height:40vh;
  border-top: 1px solid #fff;
  padding: 28px 0 14px;
}
#footer > div {
  width:90%;
  margin-bottom:0px;
  padding: 0 0px;
}
</style>
<body style="background-image: url(bgg.png)";>
  <header>
  <div id="header"> 
  <div id="leftmenu">
    <img src="logo.png"></div>
    <div id="navigation">
   <ul>
  <li class="active"><a href="index.php">HOME</a></li>
  <li> <a href="about.php">ABOUT</a> </li>
  <li> <a href="gallery.php">GALLERY</a> </li>
  <li> <a href="blog.php">BLOG</a> </li>
  <li> <a href="contact.php">CONTACT</a> </li>
</ul>
</div>
</div>
</header>
<div class=" container">
  <h1>Contact Form</h1>
  <hr>
  <div class="row">
  <div class="col-md-6" style="margin-left: 20px;"> <br>
    <address><p> Noida, Sector 2</p> </address> <br>
    <p>  E-mail:incredibleindia@12.org</p> <br>
    <p> Contact No: 0987654321</p>
  </div>
<form id="regForm" method="post" action="sign.php">
  <div class="tab">Name <br>
    <p><input type="text" placeholder="First name" oninput="this.className = ''" name="fname">
    </p> <br>
    <p><input placeholder="Last Name" oninput="this.className = ''" name="lname" type="text">
    </p> <br>
  </div>

  <div class="tab">Contact_info <br>
    <p><input type="Email" placeholder="Email" oninput="this.className = ''" name="email">
    </p> <br>
    <p><input placeholder="phone" oninput="this.className = ''" name="phone" type="text">
    </p> <br>
  </div>

  <div class="tab">Login_Info: <br>
    <p><input type="text" placeholder="Username..." oninput="this.className = ''" name="uname">
    </p> <br>
    <p><input placeholder="Password..." oninput="this.className = ''" name="password" type="password">
    </p> <br>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
    <br>  <br> <br><p style="color:white;"> Already have an account? <a href="contact.php" style="font-family:play,sans-serif; color:red;"> &nbsp; Log In</a>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">

    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>

  </div>
</form>
</div>
</div>
<script>
var currentTab = 0; 
showTab(currentTab); 

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n)
}
function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
    return false;
  }
  showTab(currentTab);
}
function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
}
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;
}
function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}
</script>
<footer>
<div id="footer"><div>
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-instagram"></a>
  <a href="#" class="fa fa-pinterest"></a>

<form action="#" method="post" id="newsletter">
      <h4>Join Our Newsletter</h4>
      <input type="text" value="Enter Email Address Here For Updates" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}" style="box-sizing: border-box; width: 31%;">
      <input type="submit" value="Sign up" class="btn2" style="box-sizing: border-box; width: 20%;">
</form>
<div id="footer-nav">
   <ul>
  <li><a href="index.php">HOME</a></li>
  <li> <a href="about.php">ABOUT</a> </li>
  <li> <a href="gallery.php">GALLERY</a> </li>
  <li> <a href="blog.php">BLOG</a> </li>
  <li> <a href="contact.php">CONTACT</a> </li>
</ul>
</div>
  <p id="footnote">
        © Copyright 2023. All Rights Reserved.
  </p>
</div>
</div>
</footer>
</body>
</html>