@extends('admin.layouts.app')

@section('page')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="#" alt="" width="50" height="50">
                        <input type="file">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Update Profile saya
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input id="" class="form-control" type="email" name="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input id="" class="form-control" type="text" name="" >
                        </div>
                    </div>
                </div>
                <h4 class="py-4">Update password</h4>
                <div class="card">
                    <div class="card-header">
                        Update Password saya
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Password lama</label>
                            <input id="" class="form-control" type="password" name="">
                        </div>
                        <div class="form-group">
                            <label for="">Password Baru</label>
                            <input id="" class="form-control" type="password" name="" >
                        </div>
                        <div class="form-group">
                            <label for="">Konfirmasi password Baru</label>
                            <input id="" class="form-control" type="password" name="" >
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-block">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection