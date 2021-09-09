@extends('admin.layouts.app')

@section('page')
    <div class="container-fluid">
            <form action="{{ route('admin.vimis.update', $get->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Visi</label>
                            <textarea id="" class="form-control" name="visi" rows="10">{{$get->visi}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Misi</label>
                        <textarea id="" class="form-control" name="misi" rows="15">{{$get->misi}}</textarea>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Perbaharui</button>
                    </div>
            </form>
                </div>
    </div>
@endsection