@include('includes.nav')
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
      <form method="post" action="{{action('UserController@update', $id)}}">
        {{csrf_field()}}
        <div  class="field_wrapper">
			<h2 class="form-title">Update account</h2>
			<div class="form-group">
				<label for="Name">Name</label>

            <input type="text" class="form-input" name="Name"  pattern="(?=.*[a-z])(?=.*[A-Z]).{2,}" title="Name cannot contain any numbers or symbols" id="name" placeholder="Your Name" required value="{{$user->name}}"/>
			</div>
			<div class="form-group">
				<label for="Email">Email</label>

            <input type="email" class="form-input" name="Email" id="email" placeholder="Your Email" required value="{{$user->email}}"/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>

				<input type="text" class="form-input" name="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required value="{{$user->password}}" />
				<span onclick="myFunction()" class="zmdi zmdi-eye field-icon toggle-password"></span>
			</div>
			
			<div class="form-group">


				<label for="Gender">Gender</label>
				<input type="radio" name="Gender" value="male" checked> Male<br>
				<input type="radio" name="Gender" value="female"> Female<br>
			</div>
			<div class="form-group">
				
					<label for="dob">Date of birth</label>
					<input placeholder="date of birth" name="dob" type="date" data-date-inline-picker="false" data-date-open-on-focus="true" value="{{$user->dob}}" />

			</div>
			<div class="form-group">
				<label for="input_field[]">Interests</label>
				<!--<input name="input_field[]" type="text" id="country1" style="height:35px; width:200px;"/>-->
                <!--<a href="javascript:void(0);" class="add_input_button" title="Add field" ><img src="add-icon.png"/></a>-->
                <input type="interest" class="form-input" name="interest1" id="interest" placeholder="interest" required value="{{$user->interest1}}"/>
                <input type="interest" class="form-input" name="interest2" id="interest" placeholder="interest" required value="{{$user->interest2}}"/>
                <input type="interest" class="form-input" name="interest3" id="interest" placeholder="interest" required value="{{$user->interest3}}"/>
                <input type="interest" class="form-input" name="interest4" id="interest" placeholder="interest" required value="{{$user->interest4}}"/>
                <input type="interest" class="form-input" name="interest5" id="interest" placeholder="interest" required value="{{$user->interest5}}"/>
			</div>
		</div>
		
		<div class="form-group">
			<input type="submit" name="submit" id="submit" class="form-submit" value="Update"/>
		</div>
	</form>

</body>
</html>