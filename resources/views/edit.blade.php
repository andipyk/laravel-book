@extends('layout');

@section('content')
<div class="container">
      <h2>Edit Data Buku</h2><br/>
      <form method="post" action="{{action('BookController@update', $id)}}">
      @csrf
      <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Judul buku:</label>
            <input type="text" class="form-control" name="title" value="{{$book->title}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Keterangan:</label>
              <input type="text" class="form-control" name="description" value="{{$book->description}}">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Qty">Stock:</label>
            <input type="text" class="form-control" name="qty" value="{{$book->qty}}">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Penerbit:</label>
                <select name="publisher">
                  <option value="Pustaka Imam Syafi`i" @if($book->publisher=="Pustaka Imam Syafi`i") selected @endif>Pustaka Imam Syafi`i</option>
                  <option value="Pustaka Ibnu Katsir" @if($book->publisher=="Pustaka Ibnu Katsir") selected @endif>Pustaka Ibnu Katsir</option>
                  <option value="Darul Haq" @if($book->publisher=="Darul Haq") selected @endif>Darul Haq</option>  
                  <option value="At-tibyan" @if($book->publisher=="At-tibyan") selected @endif>At-tibyan</option>  
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
@endsection