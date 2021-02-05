@extends('admin.layouts.app')

@section('page')
    <div class="container-fluid">
        <div class="row">
           <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary add_more_input">Tambah input</button>
                </div>
                <div class="card-body">
                <form action="" method="POST" id="formSubmit" enctype="multipart/form-data">
                    @csrf
                    <div class="inputs_div">
                        <div class="form-group">               
                            <label for="">Jabatan</label>
                            <input type="text" class="form-control" name="position[]">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Anda</label>
                            <input type="text" class="form-control" name="name[]">
                        </div>
                        <div class="form-group">
                            <label for="">Foto Anda</label>
                            <input type="file" class="form-control" name="images[]">
                            <span class="text-danger" id="image-input-error"></span>
                        </div>
                    </div>
                </div>
            </div>
           </div>
           <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Kategori Pengurus
                        </h6>
                    </div>
                    <div class="card-body">
                        <select name="category_strucure_id" id="category_structure" class="form-control">
                            <option value="" selected disabled>Pilih kategori</option>
                            @foreach ($category_structures as $cs)
                                <option value="{{ $cs->id }}">{{ $cs->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                    </div>
                    </form>
                </div>
           </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script type="text/javascript">
        $(function(){
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        })


        
        $('#formSubmit').submit(function(e){
            e.preventDefault();
            
            alert('hello')
            let formData = new FormData(this);
            $('#image-input-error').text('');

        })

        // add and remove input form
        $(function(){
            $(this).on('click', '.add_more_input', function(){
                var html = 
                        `
                        <div class="forms">
                        <div class="form-group">        
                            <label for="">Jabatan</label>
                            <input type="text" class="form-control" name="position[]">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Anda</label>
                            <input type="text" class="form-control" name="name[]">
                        </div>
                        <div class="form-group">
                            <label for="">Foto Anda</label>
                            <input type="file" class="form-control" name="images[]">
                        </div>`;
                // html += `<i class="fas fa-times-circle remove_input" style="cursor:pointer"></i>`;
                html += `<input type="submit" class="btn btn-danger btn-block remove_input" value="Remove"></div>`;
                $(".inputs_div").append(html);
            })

            $(this).on('click', '.remove_input', function(){
                var target_input = $(this).parent();
                target_input.remove();
            })
        });

    </script>
@endpush