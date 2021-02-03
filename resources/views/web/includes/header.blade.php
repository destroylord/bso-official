<header class="header">
    <div class="header-inner">
        <div class="container-fluid px-lg-5">
            <nav class="navbar navbar-expand-lg my-navbar">
                <a class="navbar-brand" href="#"> <span class="logo">
                    <img src="{{ asset('web/img/logo5.png') }}" alt="logo-img" class="img-fluid" style="width: 30p; margin : -3px 0px 0px 0px">Dafrin Web </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">
                      <i class="fas fa=bars" style="margin: 5px 0px 0px 0px"></i>
                  </span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Struktur Organisasi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/blogs">Blog</a>
                    </li>
                  </ul>
                  {{-- <form class="form-inline my-2 my-lg-0"> --}}
                    <a href="/login" class="btn btn-primary header-btn my-2 my-lg-0" >Login</a>
                  {{-- </form> --}}
                </div>
              </nav>
        </div>
    </div>
</header>