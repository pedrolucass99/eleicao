<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
        <form method="post" action="{{action('CandidateController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nomedocandidato">Nome do candidato:</label>
            <input type="text" class="form-control" name="nomedocandidato" value="{{$candidate->nomedocandidato}}">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="numerodocandidato">Numero do candidato:</label>
              <input type="text" class="form-control" name="numerodocandidato" value="{{$candidate->numerodocandidato}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="imagem">    
          </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="party_id">ID do partido:</label>
              <input type="text" class="form-control" name="party_id" value="{{$candidate->party_id}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
