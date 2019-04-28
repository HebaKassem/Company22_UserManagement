@include('includes.nav')
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
        <th>First interest</th>
        <th colspan="2">     </th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['interest1']}}</td>
        <td><!a href="{{action('UserController@edit', $user['id'])}}" class="btn btn-warning"></a></td>
        <td>
          <form action="{{action('UserController@destroy', $user['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <!button class="btn btn-danger" type="submit"></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>