@extends('admin.layouts.app')

@section('page')
<div class="container-fluid">

<form action="" method="POST">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Judul">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input id="" class="form-control" type="text" name="" placeholder="Slug..." readonly>
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea id="" class="form-control" name="" rows="15"></textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Hello</h6>
                </div>
                <div class="card-body">
                    <input type="file">
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Publish</button>
                </div>
            </div>
        </div>
    </div>
</form>

</div>
@endsection