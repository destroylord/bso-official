@extends('admin.layouts.app')

@section('page')
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('admin.vimis.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Photo</label>
                    <input id="" class="form-control" type="file" name="images">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Visi</label>
                    <textarea id="" class="form-control" name="visi" rows="10"></textarea>
                </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                   <label for="">Misi</label>
                   <textarea id="" class="form-control" name="misi" rows="15"></textarea>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary">Publish</button>
            </div>
            </form>
        </div>
    </div>
@endsection