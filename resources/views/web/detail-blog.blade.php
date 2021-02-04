@extends('web.app')
@push('stylesheet')
    <link rel="stylesheet" href="../css/style-web.css">
@endpush
@section('page')
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-md-8">
                    <h2 class="text-uppercase font-weight-bold">
                        {{ $post->title }}
                    </h2>
                    <div class="d-flex justify-content-start mt-2">
                        <img src="" alt="Img" class="rounded">
                        <small class="mr-3"><p>Dafrin Maulana, 26 Oktober 2021</p></small>
                    </div>
                    <img src="{{ $post->takeimage }}" class="w-100" alt="">
                    <article class="mt-4 py-4" style="line-height: 1.8">
                        {{ $post->description }}
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection