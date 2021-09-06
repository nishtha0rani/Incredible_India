<?php
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error());
?>

<?php
error_reporting(0);
session_start();
if(isset($_POST['next']))
{
	if($_POST['fname']=="" || $_POST['lname']=="")
	{
		$err="Fill your id and password first";
	}
	else{
		$d=mysqli_query($con,"SELECT * FROM loginform where Username='{$_POST['fname']}'");
		$row=mysqli_fetch_object($d);
		$fid=$row->Username;
		$fpass=$row->Password;
		if ($fid==$_POST['fname'] && $fpass==$_POST['lname'])
		{
			$_SESSION['sid']=$_POST['fname'];
			header('location:index.php');
		}
	else
	{
		$err="Invalid id or password";
	}
}
}
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

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
}
input[type=pwrd]{
  transition:0.5s;
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

<form method="post" id="regForm" action="feedback.php">


<font color="white" size="+2"> <?php echo $err; ?> </font>
	
<div class="tab">Name: <br>
    <p><input type="text" placeholder="First name..." oninput="this.className = ''" name="fname" required></p> <br>
    <p><input type="text" placeholder="Last name..." oninput="this.className = ''" name="lname"
      required></p> <br>
  </div>
  <div class="tab">Contact_Info: <br>
    <p><input type="text" placeholder="E-mail..." oninput="this.className = ''" name="email"></p> <br>
    <p><input type="text" placeholder="Phone..." oninput="this.className = ''" name="phone"></p> <br>
  </div>

  <div class="tab">Login_Info: <br>
    <p><input type="text" placeholder="Username..." oninput="this.className = ''" name="uname">
    </p> <br>
    <p><input placeholder="Password..." oninput="this.className = ''" name="password" type="pwrd">
    </p> <br>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)" name="previous">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)" name="next">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div> 
</form> 
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
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
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
</html>