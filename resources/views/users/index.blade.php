@include('includes.nav')

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

			var new_field_html = '<div> <input name="input_field[]" type="text" id="country'+Number(input_count)+'" style="height:100px; width:300px;"/>country'+Number(input_count)+'</div>';
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


</script>

</head>

<body style="text-align: center !important; background-image: url('appform.jpg')  !important;" >         



	<form style=" margin-top: 75px !important; text-align: center !important; width: 35% !important; border: none !important; background-color: white !important; opacity: 0.95 !important;" action="{{url('users')}}" method="post">
  {{csrf_field()}}

		<div  class="field_wrapper">
			<h2 class="form-title">Application form</h2>
			<div class="form-group">
				<label for="Name">Name</label>

			<input type="text" class="form-input" name="Name" pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="Name cannot contain any numbers or symbols" id="name" placeholder="Your Name" required/>	
            </div>
			<div class="form-group">
				<label for="Email">Email</label>

				<input type="email" class="form-input" name="Email" id="email" placeholder="Your Email" required/>
			</div>
			
			<div class="form-group">


				<label for="Gender">Gender</label>
				<input type="radio" name="Gender" value="male" checked> Male<br>
				<input type="radio" name="Gender" value="female"> Female<br>
			</div>
			<div class="form-group">
				<div class="form-row show-inputbtns">
					<label for="dob">Date of birth</label>
					<input placeholder="date of birth" name="dob" type="date" data-date-inline-picker="false" data-date-open-on-focus="true" />
				</div>

			</div>
            <div class="form-group">
				<label for="mobilenumber">mobilenumber</label>

				<input type="text" class="form-input" name="mobilenumber"  title="number cannot contain any char or symbol" id="mobilenumber" placeholder="Your Mobile" required/>
			</div>
            
            <div class="form-group">
				<label for="homeadress">homeadress</label>

				<input type="text" class="form-input" name="adress" pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="adress cannot contain any symbols" id="name" placeholder="Your adress" required/>
			</div>
            
            <div class="form-group">
				<label for="city">city</label>

				<input type="text" class="form-input" name="city" pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="city cannot contain any symbols" id="city" placeholder="Your city" required/>
			</div>
            
            <div class="form-group">
				<label for="majorAreaOfStudy">majorAreaOfStudy</label>

				<input type="text" class="form-input" name="majorAreaOfStudy" pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="majorAreaOfStudy cannot contain any symbols or numbers" id="majorAreaOfStudy" placeholder="Your majorAreaOfStudy" required/>
			</div>
            
            <div class="form-group">
				<label for="CareerObjective">CareerObjective</label>

				<input type="text" class="form-input" name="CareerObjective" pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="CareerObjective cannot contain any symbols" id="CareerObjective" placeholder="Your CareerObjective" required/>
			</div>
            
            <div class="form-group">
				<label for="positionAppliedFor">positionAppliedFor</label>

				<input type="text" class="form-input" name="positionAppliedFor" pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="positionAppliedFor cannot contain any symbols" id="positionAppliedFor" placeholder="Your positionAppliedFor" required/>
			</div>
            
            <div class="form-group">
				<label for="currentQualification">currentQualification</label>

				<input type="text" class="form-input" name="currentQualification" pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="currentQualification cannot contain any symbols" id="currentQualification" placeholder="Your currentQualification" required/>
			</div>
            
            <div class="form-group">
				<label for="programName">programName</label>

				<input type="text" class="form-input" name="programName" pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="programName cannot contain any symbols" id="programName" placeholder="Your programName" required/>
			</div>
            
            <div class="form-group">
				<label for="gpa">gpa</label>

				<input type="number" class="form-input" name="gpa" title="gpa must be a number" id="gpa" placeholder="Your gpa" required/>
			</div>
            

            
		</div>
		<div class="form-group">
			<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required title="You must agree to terms of service in order to proceed" />
			<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" id="submit" class="form-submit" value="application form"/>
		</div>
	</form>

</body>
</html>