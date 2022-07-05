  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
    <link href="{{ asset('summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/website.css')}}" rel="stylesheet">
  </head>

  <body class=''>
    <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/texto.png') }}" width='200px'></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#"> Blog </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#"> Sistemas </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#"> Cursos e Palestras </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#"> Portifólio </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#"> Fale Conosco </a>
            </li>

            <div class="btn-group">
              @auth
              <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
              @else
              <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
              </a>
              <a class="btn btn-success" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">
                Cadastre-se
              </a>
              @endauth
            </div>

          </ul>
        </div>
    </nav>

    <div class="container-fluid m-0 p-0 bg-blue-img mb-3" style="min-height: 500px;">
      <div class="container">

        <div class="row">
          <div class="col-12" style='min-height: 100px'>

          </div>

          <div class="col-md-6 col-sm-12 col-lg-6">
            <img src="{{ asset('img/dragao.png') }}" class='img' />
          </div>

          <div class="col-md-6 col-ms-12 col-lg-6">
            <div class="card text-dark bg-light shadow" style="opacity: 0.9">
              <div class="card-body">
                <h5 class="card-title">Estamos preparando esse site</h5>
                <h6 class="card-subtitle mb-2 text-muted">Mas acalme-se!</h6>
                <p class="card-text">Você ainda pode entrar em contato de alguma maneira caso precise de algo.</p>
                <a href="#" class="card-link">E-mail</a>
                <a href="#" class="card-link">Whatsapp</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <main class="container">
      <!--div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Sistemas</strong>
              <p class="card-text mb-auto"> Somos especialistas em PHP, desenvolvemos sistemas do zero, damos manutenção em sistemas legados,
              criamos novas funcionalidades, fazemos análise de risco entre outros. </p>
              <a href="#" class="stretched-link">Saiba mais</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success">Sites</strong>
              <p class="mb-auto">Desenvolvemos também sites corporativos, landing pages e formulários para eventos, blogs entre outros tipos de websites.</p>
              <a href="#" class="stretched-link">Saiba mais</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            </div>
          </div>
        </div>
      </div-->

      <div class="row g-5">
        <div class="col-md-8">
          @yield('content')

        </div>

        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem;">
            @auth
            <div class="mb-3">
              @if(Auth::user()->is_admin)
              <a href="{{ url('admin/news-category') }}">
                <div class='btn btn-primary w-100 p-2 mb-1 rounded shadow'>
                  Categorias de Notícias
                </div>
              </a>

              <a href="{{ url('admin/news') }}">
                <div class='btn btn-primary w-100 p-2 mb-1 rounded shadow'>
                  Notícias
                </div>
              </a>
              @endif
              <a href="#">
                <div class='btn btn-secondary  w-100 p-2 mb-1 rounded shadow'>
                  Meus dados
                </div>
              </a>

              <a href="#">
                <div class='btn btn-secondary  w-100 p-2 mb-1 rounded shadow'>
                  Notificações
                </div>
              </a>
            </div>
            @endauth

            <div class="p-4 mb-3 bg-light rounded shadow">
              <h4 class="fst-italic"> Sobre </h4>
              <p class="mb-0">
                Esse site é uma aventura de um programador entediado que abriu uma empresa para receber
                como pessoa Jurídica. Dessa maneira o conteúdo é extremamente variável e possui até coisas
                não relacionadas a programação.
              </p>
            </div>

            <div class="mb-3">
              <h4 class="fst-italic">Últimas publicações</h4>
              <ol class="list-unstyled mb-0">
                @php
                $lastFiveNews = Helper::getLastFiveNews();
                @endphp

                @if(count($lastFiveNews) == 0)
                <div class='alert alert-danger'> Nenhuma publicação encontrada </div>
                @else
                @foreach($lastFiveNews as $lastNews)
                <li><a href="#"> {{ $$lastNews->name }} </a></li>
                @endforeach
                @endif
              </ol>
            </div>

            <div class="mb-3">
              <h4 class="fst-italic">Categorias</h4>
              <ol class="list-unstyled mb-0">
                @php
                $newsCategories = Helper::getAllNewsCategories();
                @endphp

                @if(count($newsCategories) == 0)
                <div class='alert alert-danger'> Nenhuma categoria encontrada </div>
                @else
                @foreach($newsCategories as $newsCategory)
                <li><a href="#"> {{ $newsCategory->name }} </a></li>
                @endforeach
                @endif
              </ol>
            </div>

            <div class="mb-3">
              <h4 class="fst-italic">Mais sobre mim</h4>
              <ol class="list-unstyled">
                <li><a href="https://github.com/AnddFontoura">GitHub</a></li>
                <li><a href="https://bitbucket.org/anddfontoura/">BitBucket</a></li>
                <li><a href="https://www.linkedin.com/in/andr%C3%A9-fontoura-151a1162/"> Linkedin </a></li>
                <li><a href="https://www.facebook.com/andre.fontoura.21"> Facebook </a></li>
                <li><a href="https://www.instagram.com/anddfontoura/"> Instagram </a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer class="container-fluid bg-blue-img mt-3">
      <div class="container">
        <div class="row ">
          <div class="col-lg-4 col-sm-12 col-md-4">
            <img class="img w-100 p-4" src="{{ asset('img/fd_logo_branco_g.png') }}"></img>
          </div>

          <div class="col-lg-4 col-sm-12 col-md-4">

          </div>

          <div class="col-lg-4 col-sm-12 col-md-4">
            <ul class='list-unstyled p-4 pb-0'>
              <li class="mb-2">
                <i class="fab fa-whatsapp"></i>
                Whatsapp
                <p> +55 41 99251 6138 </p>
              </li>

              <li class="mb-2">
                <i class="far fa-envelope"></i>
                Email:
                <p>contato@fontouradesenvolvimento.com.br </p>
              </li>

              <li class="">
                <i class="far fa-map"></i>
                Endereço:
                <p> Rua Rio Piquiri, 699, Weissopolis, Ap 407A - Pinhais - PR </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form method="POST" action="{{ route('register') }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registrar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              @csrf
              <div class="form-group mb-3">
                <label for="name" class="form-label">{{ __('basic.form.name') }}</label>
                <input id="nameRegister" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="email" class="form-label">{{ __('basic.form.email') }}</label>
                <input id="emailRegister" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="password" class="form-label">{{ __('basic.form.password') }}</label>
                <input id="password-register" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group  mb-3">
                <label for="password-confirm" class="form-label">{{ __('basic.form.confirm_password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>

            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">
                {{ __('basic.register') }}
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form method="POST" action="{{ route('login') }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              @csrf
              <div class="form-group mb-3">
                <label for="email" class="col-form-label"> {{ __('basic.form.email') }} </label>
                <input id="emailLogin" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password" class="form-label"> {{ __('basic.form.password') }} </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
              </button>
              @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('basic.forgot_your_password') }}
              </a>
              @endif
            </div>
          </div>
        </div>
      </form>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/0cc6f43f73.js" crossorigin="anonymous"></script>
    <script src="{{ asset('summernote/summernote-bs4.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#summernote').summernote();
        $('.select2').select2({
          theme: 'bootstrap-5'
        });
      });
    </script>

    @yield('page_js')
  </body>

  </html>