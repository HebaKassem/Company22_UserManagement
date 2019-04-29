@include('includes.compNav')
  <body>
    <div class="container">
    <br />
    {{-- @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif --}}
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Num of Employees</th>
        <th>First interest</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($companies as $company)
      <tr>
        <td>{{$company['companyID']}}</td>
        <td>{{$company['name']}}</td>
        <td>{{$company['email']}}</td>
        <td>{{$company['numOfEmp']}}</td>
        <td>{{$company['interest1']}}</td>
        
        <td><a href="{{action('CompanyController@edit', $company['companyID'])}}" class="btn btn-warning">Edit</a></td>

          <form action="{{action('CompanyController@destroy', $company['companyID'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">

          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>