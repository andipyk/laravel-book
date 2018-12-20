@extends('layout')

@section('content')
    <div class="container">
        <h2>Tambah Buku Baru</h2>
        <form action="{{url('books')}}" method="post" enctype="multipart/form-data">
            @crsf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Title">Judul Buku:</label>
                    <input type="text" name="title" class="form-control">
                </div>
            </div>

        </form>
    </div>
@endsection