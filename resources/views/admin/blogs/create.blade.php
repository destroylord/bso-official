@extends('admin.layouts.app')

@section('page')
<div class="container-fluid">

<form action="{{ route('admin.posts.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
    @include('admin.blogs.partials.form-control', ['title' => 'publish'])
</form>

</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js" integrity="sha512-i1kgQZJBA3n0k1Ar2++6FKibz8fDlaDpZ8ZLKpCnypYznNL++R6FPxpKJP6NGwsO2sAzzX4x78XjiYrLtMWAfA==" crossorigin="anonymous"></script>

<script src="../../js/StringToSlug/dist/jquery.stringtoslug.min.js"></script>

<script>
$(document).ready( function() {
    $(".basic-usage").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#permalink',
        space: '-',
        prefix: '',
        suffix: '',
        replace: '',
        AND: 'and',
        options: {},
        callback: false
    });
});
</script>
@endpush