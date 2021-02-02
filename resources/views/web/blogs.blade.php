@extends('web.app')
@section('page')
    <section class="blogs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Yuk Baca Blog Kami!!</h3>
                    <p class="mt-4">
                        Lebih menyenangkan untuk menambah ilmu disini jika kalian dalam keaadaan gabut maupun jomblo di tahun ini.
                    </p>
                </div>
            </div>
            <div class="row mt-4">
            @foreach ($posts as $post)
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ $post->takeImage }}" alt="Thumbnail">
                        <div class="card-body"> 
                            <div class="card-title text-uppercase font-weight-bold ">
                                <a href="javascript:void(0)" class="text-decoration-none"> {{ $post->title }} </a>
                            </div>
                            <div class="card-text text-muted">
                                <p style="font-size: 14px">
                                    {{  Str::limit($post->description, 100, '...')  }}
                                </p>
                            </div>
                        </div>
                    </div>   
                </div>                   
            @endforeach
            </div>
        </div>
    </section>
@endsection