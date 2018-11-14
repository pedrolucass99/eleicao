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
        <th>Nome do candidato</th>
        <th>Número do candidato</th>
        <th>ID do partido</th>
        <th>Foto do candidato</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($candidates as $candidate)
      @php
        $date=date('Y-m-d', $candidate['date']);
        @endphp
      <tr>
        <td>{{$candidate['id']}}</td>
        <td>{{$candidate['nomedocandidato']}}</td>
        <td>{{$candidate['numerodocandidato']}}</td>
        <td>{{$candidate['party_id']}}</td>
        <td><img style="right: 100px; height: 100px;" src="/images/{{$candidate['imagem']}}" alt=""></td>
        
        <td><a href="{{action('CandidateController@edit', $candidate['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CandidateController@destroy', $candidate['id'])}}" method="post">
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