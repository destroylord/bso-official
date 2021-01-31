@extends('admin.layouts.app')

@section('page')
<div class="container-fluid">

<form action="" method="POST" enctype="multipart/form-data">
    @include('admin.blogs.partials.form-control')
</form>

</div>
@endsection