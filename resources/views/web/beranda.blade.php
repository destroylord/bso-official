@extends('web.app')

@section('page')
    <section class="content-banner">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="banner-con text-center">
                        <p class="first-title">Selamat Datang di website polije</p>
                        <p class="banner-des">prototype, design, collabs, and design system all </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="main-content">
        <section id="cardes">
            <div class="container shadow-sm">
                <div class="row">
                    <div class="col-md-3">
                        <div class="media border-0 p-3">
                            <img src="img_avatar3.png" alt="img-logo" class="mr-3 mt-3 rounded-circle">
                            <div class="media-body">
                              <h6>BPH</h6>
                              <p>Badan Pengurus Harian</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media border-0 p-3">
                            <img src="img_avatar3.png" alt="img-logo" class="mr-3 mt-3 rounded-circle">
                            <div class="media-body">
                              <h6>Divisi Perhub</h6>
                              <p>Perhubungan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media border-0 p-3">
                            <img src="img_avatar3.png" alt="img-logo" class="mr-3 mt-3 rounded-circle">
                            <div class="media-body">
                              <h6>Divisi MinBak</h6>
                              <p>Minat Bakat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media border-0 p-3">
                            <img src="img_avatar3.png" alt="img-logo" class="mr-3 mt-3 rounded-circle">
                            <div class="media-body">
                              <h6>Divisi KWU</h6>
                              <p>Kewirausahaan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="vimi">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center py-4">
                            Visi dan Misi
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            {{-- {{ $visimisi->visi }} --}}
                        </p>
                    </div>
                    <div class="col-md-6">
                       <img src="{{ 'public/storage/vimi/images/1612060263.jpeg' }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="d-flex justify-content-between py-4">
                    <div>
                        <h4>Blog</h4>
                    </div>
                    <div>
                        <a href="#" style="font-size: 14px">Lihat Semua</a>
                    </div>                    
                </div>
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card border-0 rounded-top shadow-sm">
                            <img class="card-img-top" id="imgCard" src="{{ $post->takeImage }}" alt="Card image cap">
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
    </div>
@endsection
@push('scripts')
    <script>
        $(function(){
            var navbar = $('.header-inner');
            $(window).scroll(function(){
                if ($(window).scrollTop() <= 50) {
                    navbar.removeClass('navbar-scroll')
                }else{
                    navbar.addClass('navbar-scroll')
                }
            })
        })
    </script>
@endpush