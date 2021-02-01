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
            <div class="container">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolores ducimus quod perferendis hic voluptatum mollitia ratione consequatur quibusdam, est quidem officiis asperiores sunt alias pariatur provident blanditiis perspiciatis officia?
                </p>
            </div>
        </section>
        <section>
            <div class="container">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolores ducimus quod perferendis hic voluptatum mollitia ratione consequatur quibusdam, est quidem officiis asperiores sunt alias pariatur provident blanditiis perspiciatis officia?
                </p>
            </div>
        </section>
        <section>
            <div class="container">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolores ducimus quod perferendis hic voluptatum mollitia ratione consequatur quibusdam, est quidem officiis asperiores sunt alias pariatur provident blanditiis perspiciatis officia?
                </p>
            </div>
        </section>
        <section>
            <div class="container">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolores ducimus quod perferendis hic voluptatum mollitia ratione consequatur quibusdam, est quidem officiis asperiores sunt alias pariatur provident blanditiis perspiciatis officia?
                </p>
            </div>
        </section>
        <section>
            <div class="container">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolores ducimus quod perferendis hic voluptatum mollitia ratione consequatur quibusdam, est quidem officiis asperiores sunt alias pariatur provident blanditiis perspiciatis officia?
                </p>
            </div>
        </section>
        <section>
            <div class="container">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolores ducimus quod perferendis hic voluptatum mollitia ratione consequatur quibusdam, est quidem officiis asperiores sunt alias pariatur provident blanditiis perspiciatis officia?
                </p>
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