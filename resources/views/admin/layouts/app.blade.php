@extends('layouts.app')

    @push('stylesheet')
        <link rel="stylesheet" href="{{asset('css/sb-admin-2.css')}}">
        <link rel="stylesheet" href=" {{asset('admin/vendor/fontawesome-free/css/all.min.css')}} ">
        <!-- Custom styles for this page -->
        <link href=" {{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}} " rel="stylesheet">
    @endpush
@section('content')
<section id="wrapper">
    @include('admin.layouts.partials.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
        @include('admin.layouts.partials.nav')

            @yield('page')
        
        </div>
        <!-- End of Main Content -->
        @include('admin.layouts.partials.footer')
    </div>
    <!-- End of Content Wrapper -->
</section>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>
      <!-- Page level plugins -->
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>
@endpush