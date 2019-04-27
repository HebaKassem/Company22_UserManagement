@include('includes.compNav')

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Detail Article</title>
	<link rel="stylesheet" type="text/css" href="css/jquery.ajaxcomplete.css" />
	<!-- Font Icon -->
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

	<!-- Main css -->
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.ajaxcomplete.js"></script>
	<!-- JS -->
	<script src="js/main.js"></script>
	<script>
		$(document).ready(
			function(){
				$("#country1").autocomplete("ajaxcomplete.php", {
					selectFirst: true
				});
			}
			);
		$(document).ready(function(){
			var max_fields = 5;
			var add_input_button = $('.add_input_button');
			var field_wrapper = $('.field_wrapper');
			var input_count = 1;
			var new_field_html = '<div> <input name="input_field[]" type="text" id="country'+Number(input_count)+'" style="height:35px; width:200px;"/>country'+Number(input_count)+'</div>';
// Add button dynamically
$(add_input_button).click(function(){
	if (document.getElementById("country1").value!=""){
		if(input_count < max_fields){
			input_count++;
			new_field_html = '<div> <input name="input_field[]" type="text" id="country'+Number(input_count)+'" style="height:35px; width:200px;"/>country'+Number(input_count)+'</div>';
			$(field_wrapper).append(new_field_html);
			document.getElementById("country"+Number(input_count)).value = document.getElementById("country1").value;
			document.getElementById("country1").value="";
		}
	}
	else{
		alert("Empty field!");
	}
});
});
		function myFunction() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
</script>

</head>

<body style="text-align: center !important; background-image: url('signup.jpg')  !important;" >         



	<form style=" margin-top: 75px !important; text-align: center !important; width: 35% !important; border: none !important; background-color: white !important; opacity: 0.95 !important;" action="companysignup.php" method="post">

		<div  class="field_wrapper">
			<h2 class="form-title">Create account</h2>
			<div class="form-group">
				<label for="Name">Name</label>

				<input type="text" class="form-input" name="Name" pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="Name cannot contain any numbers or symbols" id="name" placeholder="Your Name" required/>
			</div>
			<div class="form-group">
				<label for="Email">Email</label>

				<input type="email" class="form-input" name="Email" id="email" placeholder="Your Email" required/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>

				<input type="text" class="form-input" name="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required />
				<span onclick="myFunction()" class="zmdi zmdi-eye field-icon toggle-password"></span>
			</div>
			
			<div class="form-group">
				<label for="emp#">Number of employees</label>
				<input type="number" class="form-input" name="emp#" id="emp#" required/>
			</div>
			<div class="form-group">
				<label for="input_field[]">Interests</label>
				<!--input name="input_field[]" type="text" id="country1" style="height:35px; width:200px;"/>
				<a href="javascript:void(0);" class="add_input_button" title="Add field" ><img src="add-icon.png"/></a-->
		<input type="interest" class="form-input" name="interest1" id="interest" placeholder="interest1" required/>
        <input type="interest" class="form-input" name="interest2" id="interest" placeholder="interest2" required/>
        <input type="interest" class="form-input" name="interest3" id="interest" placeholder="interest3" required/>
        <input type="interest" class="form-input" name="interest4" id="interest" placeholder="interest4" required/>
        <input type="interest" class="form-input" name="interest5" id="interest" placeholder="interest5" required/>
			
      </div>
		</div>
		<div class="form-group">
			<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required title="You must agree to terms of service in order to proceed" />
			<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
		</div>
	</form>

</body>
</html>