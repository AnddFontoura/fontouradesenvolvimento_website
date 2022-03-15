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
    <link href="{{ asset('summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/website.css')}}" rel="stylesheet">
  </head>
  <body class=''>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">

          </div>
          <div class="col-4 text-center">
            <img class='img' width='200px' src="{{ asset('img/logo_fontoura.png')}}"> </img>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <div class="row m-0">
              <div class="col-12 mb-3">
                <a class="btn btn-primary w-100" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                  Login
                </a>
              </div>
              <div class="col-12 mb-3">
                <a class="btn btn-success w-100" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">
                  Cadastre-se
                </a>
              </div>
            <div>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 link-secondary" href="#"> Desenvolvimento de Sistemas </a>
          <a class="p-2 link-secondary" href="#"> Sites e páginas pessoais </a>
          <a class="p-2 link-secondary" href="#"> Artigos & Tutoriais </a>
          <a class="p-2 link-secondary" href="#"> Cursos e Palestras </a>
          <a class="p-2 link-secondary" href="#"> Portifólio </a>
          <a class="p-2 link-secondary" href="#"> Futebol </a>
        </nav>
      </div>
    </div>

    <main class="container">
      <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic"> Fontoura Desenvolvimento </h1>
          <p class="lead my-3"> Site, blog, apresentação pessoal, tudo em um só lugar. </p>
          <p class="lead mb-0"><a href="#" class="text-white fw-bold"> Saiba mais </a></p>
        </div>
      </div>

      <div class="row mb-2">
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
      </div>

      <div class="row g-5">
        <div class="col-md-8">
          <article class="blog-post">
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
            <hr>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
          </article>

        </div>

        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded shadow">
              <h4 class="fst-italic"> Sobre </h4>
              <p class="mb-0">
                Esse site é uma aventura de um programador entediado que abriu uma empresa para receber
                como pessoa Jurídica. Dessa maneira o conteúdo é extremamente variável e possui até coisas
                não relacionadas a programação.
              </p>
            </div>

            <div class="p-4">
              <h4 class="fst-italic">Categorias</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">March 2021</a></li>
              </ol>
            </div>

            <div class="p-4">
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

    <footer class="container">
      <div class="row">
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
              <p >contato@fontouradesenvolvimento.com.br </p>
            </li>

            <li class="">
              <i class="far fa-map"></i>
              Endereço:
              <p> Rua Rio Piquiri, 699, Weissopolis, Ap 407A - Pinhais - PR </p>
            </li>
          </ul>
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
                  <label for="name" class="form-label">{{ __('Name') }}</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group mb-3">
                  <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group mb-3">
                  <label for="password" class="form-label">{{ __('Password') }}</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group  mb-3">
                  <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
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
                      <label for="email" class="col-form-label"> E-mail </label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="password" class="form-label"> {{ __('basic.password') }} </label>
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

    <script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
    </script>

    @yield('page_js')
  </body>
  </html>
