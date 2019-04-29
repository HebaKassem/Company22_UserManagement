@include('includes.nav')
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
/*		function validateEmail() {
			var $email=document.getElementById("Email").value;
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if (re.test(email)==false){
				document.getElementById("Email").value="email ghalat"
				document.getElementById("Email").setCustomValidity('Passwords must match');
			}
		}
		function passCheck() {
			var $pw=document.getElementById("Password").value;
			var re =  /^[A-Za-z]\w{7,15}$/;
			if (re.test(pw)==false){
				document.getElementById("Password").setCustomValidity('Passwords must match');
			}
		}
		function repeat(){
			var fistInput = document.getElementById("Password").value;
			var secondInput = document.getElementById("re_password").value;
			if (firstInput != secondInput&&passCheck()) {
				document.getElementById("re_password").setCustomValidity('Passwords must match');
			} 
}
var input = document.getElementById("Password");
// Then, register an event callback function
input.addEventListener("blur", require);
// No need to pass a reference to the element into the function.
// It will automatically be bound to "this".
// Also, no need for return true or return false.
function require() {
    var $pw=document.getElementById("Password").value;
			var re =  /^[A-Za-z]\w{7,15}$/;
			if (re.test(pw)==false){
			//	document.getElementById("Password").setCustomValidity('Passwords must match');
			//}
   // if (this.value == "") { 
        myError.innerHTML = "Input is required";    
    }   
}*/
</script>

</head>

<body style="text-align: center !important; background-image: url('signup.jpg')  !important;" >         



	<form style=" margin-top: 75px !important; text-align: center !important; width: 35% !important; border: none !important; background-color: white !important; opacity: 0.95 !important;" action="{{url('users')}}" method="post">
        {{csrf_field()}}
		<div  class="field_wrapper">
			<h2 class="form-title">Create User Account</h2>
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


				<label for="Gender">Gender</label>
				<input type="radio" name="Gender" value="male" checked> Male<br>
				<input type="radio" name="Gender" value="female"> Female<br>
			</div>
			<div class="form-group">
				<div class="form-row show-inputbtns">
					<label for="dob">Date of birth</label>
					<input placeholder="date of birth" name="dob" type="date" data-date-inline-picker="false" data-date-open-on-focus="true" required/>
				</div>

			</div>
			<div class="form-group">
				<label for="input_field[]">Interests</label>
				<!--<input name="input_field[]" type="text" id="country1" style="height:35px; width:200px;"/>-->
                <!--<a href="javascript:void(0);" class="add_input_button" title="Add field" ><img src="add-icon.png"/></a>-->
                <input type="interest" class="form-input" name="interest1" id="interest" placeholder="interest" required/>
                <input type="interest" class="form-input" name="interest2" id="interest" placeholder="interest" />
                <input type="interest" class="form-input" name="interest3" id="interest" placeholder="interest" />
                <input type="interest" class="form-input" name="interest4" id="interest" placeholder="interest" />
                <input type="interest" class="form-input" name="interest5" id="interest" placeholder="interest" />
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