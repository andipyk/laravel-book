@extends('layout')

@section('content')
<div class="container">
    <h2 align="center">Tambah Buku Baru</h2><br />
    <form method="post" action="{{url('books')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Title">Judul buku:</label>
                <input type="text" class="form-control" name="title">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Description">Keterangan:</label>
                <input type="text" class="form-control" name="description">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Qty">Stock:</label>
                <input type="text" class="form-control" name="qty">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Penerbit:</label>
                <select name="publisher" class="form-control">
                    <option value="Pustaka Imam Syafi`i">Pustaka Imam Syafi`i</option>
                    <option value="Pustaka Ibnu Katsir">Pustaka Ibnu Katsir</option>
                    <option value="Darul Haq">Darul Haq</option>
                    <option value="At-tibyan">At-tibyan</option>
                </select>
            </div>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
@endsection