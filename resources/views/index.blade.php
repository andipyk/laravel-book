@extends('layout')

@section('content')
<div class="container">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div>
     @endif
    <a href="{{route('books.create')}}"> <button class="btn btn-success" >Create</button> </a>
    <br />
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul Buku</th>
        <th>Keterangan</th>
        <th>Penerbit</th>
        <th>Stock</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=0; ?>
      @foreach($books as $book)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{$book['title']}}</td>
        <td>{{$book['description']}}</td>
        <td>{{$book['publisher']}}</td>
        <td>{{$book['qty']}}</td>
        
        <td><a href="{{action('BookController@edit', $book['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BookController@destroy', $book['id'])}}" method="post">
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
@endsection