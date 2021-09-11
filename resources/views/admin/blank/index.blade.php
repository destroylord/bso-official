@extends('admin.layouts.app')

@section('page')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Post</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_post}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Anggota Organisasi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> {{{$count_orgz}}} </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    

  <div class="row">
      <div class="col-md-12">
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Post Blog</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                              <th>No.</th>
                              <th>Judul</th>
                              <th>Slug</th>
                              <th>Deskripsi</th>
                              <th>Tanggal Publish</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @forelse ($blog as $item)
                              <tr>
                                  <td> {{$loop->iteration}} </td>
                                  <td>{{$item->title}}</td>
                                  <td>{{$item->slug}}</td>
                                  <td>{{$item->description}}</td>
                                  <td>{{ $item->created_at->format('d M Y') }}</td>
                                  <td>
                                        <button class="btn btn-warning btn-sm">Edit</button>
                                        <form action=" {{route('admin.posts.destroy', $item->id)}} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                  </td>
                              </tr>
                              <tr>
                              @empty
                                <td colspan="6" style="text-align:center">Kosong</td>
                              @endforelse
                            </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
          </div>
      </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection