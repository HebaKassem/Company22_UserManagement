@include('includes.compNav')
<body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      <form method="post" action="{{action('CompanyController@update', $id)}}">
        {{csrf_field()}}
        <div  class="field_wrapper">
			<h2 class="form-title">Update account</h2>
			<div class="form-group">

			<input type="hidden" value="{{$company->companyID}}" name="id">

				<label for="Name">Name</label>

				<input type="text" class="form-input" name="Name" pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="Name cannot contain any numbers or symbols" id="name" placeholder="Your Name" required value="{{$company->name}}"/>
			</div>
			<div class="form-group">
				<label for="Email">Email</label>

				<input type="email" class="form-input" name="Email" id="email" placeholder="Your Email" required value="{{$company->email}}"/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>

				<input type="text" class="form-input" name="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required value="{{$company->password}}"/>
				<span onclick="myFunction()" class="zmdi zmdi-eye field-icon toggle-password"></span>
			</div>
			
			<div class="form-group">
				<label for="numOfEmp">Number of employees</label>
				<input type="number" class="form-input" name="numOfEmp" id="numOfEmp" required value="{{$company->numOfEmp}}"/>
			</div>
			<div class="form-group">
				<label for="input_field[]">Interests</label>
				<!--input name="input_field[]" type="text" id="country1" style="height:35px; width:200px;"/>
				<a href="javascript:void(0);" class="add_input_button" title="Add field" ><img src="add-icon.png"/></a-->
			    <input type="interest" class="form-input" name="interest1" id="interest" placeholder="interest1" required value="{{$company->interest1}}"/>
				<input type="interest" class="form-input" name="interest2" id="interest" placeholder="interest2" required value="{{$company->interest2}}"/>
				<input type="interest" class="form-input" name="interest3" id="interest" placeholder="interest3" required value="{{$company->interest3}}"/>
				<input type="interest" class="form-input" name="interest4" id="interest" placeholder="interest4" required value="{{$company->interest4}}"/>
				<input type="interest" class="form-input" name="interest5" id="interest" placeholder="interest5" required value="{{$company->interest5}}"/>
					
      </div>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" id="submit" class="form-submit" value="Update"/>
		</div>
	</form>

</body>
</html>