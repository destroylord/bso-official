@extends('admin.layouts.app')

@section('page')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Struktur Organisasi</h6>
                        <a href="{{route('admin.structures.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Foto</th>
                                  <th>Name</th>
                                  <th>Jabatan</th>
                                  <th>Divisi</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                {{-- <tr>
                                  @forelse ($blog as $item)
                                      <td> {{$loop->iteration}} </td>
                                      <td>{{$item->title}}</td>
                                      <td>{{$item->slug}}</td>
                                      <td>{{$item->description}}</td>
                                      <td>{{ $item->created_at->format('d M Y') }}</td>
                                      <td>
                                            <button class="btn btn-warning">Edit</button>
                                      </td>
                                  @empty
                                    <td colspan="6" style="text-align:center">Kosong</td>
                                  @endforelse
                                </tr> --}}
                              </tbody>
                          </table>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </div>
@endsection