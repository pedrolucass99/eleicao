<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>nome</th>
        <th>numero do partido</th>
        <th>sigla</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($parties as $party)
      @php
      $date=date('Y-m-d', $party['date']);
  
 @endphp
      <tr>   
        <td>{{$party['id']}}</td>
        <td>{{$party['nome']}}</td>
        <td>{{$party['numerodopartido']}}</td>
        <td>{{$party['sigla']}}</td>
        
        <td><a href="{{action('PartyController@edit', $party['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PartyController@destroy', $party['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>