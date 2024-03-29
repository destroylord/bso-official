@extends('admin.layouts.app')

@section('page')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Informasi!</h4>
                    <p>Gambar hanya dapat mengupload 1 saja sementara masih belum untuk upload beberapa gambar.</p>
                    <hr>
                    <p>
                        Terima Kasih
                    </p>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file"  name="images">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection