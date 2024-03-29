@extends('admin.layouts.app')

@section('page')
    <div class="container-fluid">
        <div class="row">
           <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    {{-- <button class="btn btn-primary add_more_input">Tambah input</button> --}}
                </div>
                <div class="card-body">
                <form action="{{route('admin.structures.store')}}" method="POST" id="" enctype="multipart/form-data">
                    @csrf
                    <div class="inputs_div">
                        <div class="form-group">               
                            <label for="">Jabatan</label>
                            <input type="text" class="form-control @error('position') is-invalid @enderror" name="position">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Anda</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Foto Anda</label>
                            <input type="file" class="form-control @error('images') is-invalid @enderror" name="images" accept="image/*" id="imgInp">

                            <img id="blah" class="mt-4 rounded" src=" {{asset('admin/images/user-image-p.png')}} " alt="preview images" width="150" />
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
                        <select name="category_structure_id" id="category_structure" class="form-control">
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
    <script>
        $(function(){
        imgInp.onchange = evt => {
            const [file] = imgInp.files
                if (file) {
                    blah.src = URL.createObjectURL(file)
                }
            }
        })
    </script>
@endpush