@extends('admin.layouts.app')

@section('page')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Photo</label>
                    <input id="" class="form-control" type="file" name="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Visi</label>
                    <textarea id="" class="form-control" name="" rows="10"></textarea>
                </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                   <label for="">Misi</label>
                   <textarea id="" class="form-control" name="" rows="15"></textarea>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary">Publish</button>
            </div>
        </div>
    </div>
@endsection