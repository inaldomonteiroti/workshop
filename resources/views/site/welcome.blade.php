<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Workshop INBEC</title>
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/dist/css/bootstrap.css')}}">

    </head>
    <body>

        {{-- NAV --}}
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
            <a class="navbar-brand" href="#">Workshop INBEC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>
        </div>
        {{-- FNAV --}}

      {{-- Carrosel --}}
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/imagem03.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/imagem02.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/imagem01.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/imagem04.png')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      {{-- Carrosel --}}


    <!-- BOTAO DE CADASTRO -->
    <div class="container">
      <ul class="list-unstyled list-inline text-center py-2">
        <a href="{{ route('register') }}" class="btn btn-danger btn-lg btn-block" role="button" aria-pressed="true">Cadastre-se para ter acesso.</a>
      </ul>
    </div>



       <h2 style="text-align: center"> Acesse as nossas Lives: </h2>


      <!-- LIVES -->
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/thumb1.png')}}" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">RECUPERAÇÃO DE ESTRUTURAS DE CONCRETO ARMADO
                </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-danger">LIVE INBEC</button>
                    </div>
                    <small class="text-muted">2 hs</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{asset('img/thumb2.png')}}">
                <div class="card-body">
                  <p class="card-text">FUNDAÇÕES PROFUNDAS                                                                                                                                                                                                                                                                                                                       </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-danger">LIVE INBEC</button>
                    </div>
                    <small class="text-muted">2 hs</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{asset('img/thumb3.png')}}">
                <div class="card-body">
                  <p class="card-text">SEGURANÇA ESTRUTURAL CONTRA INCÊNDIO
                </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-danger">LIVE INBEC</button>
                    </div>
                    <small class="text-muted">2 hs</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{asset('img/thumb2.png')}}">
                <div class="card-body">
                  <p class="card-text">COMO RESOLVER O PROBLEMA DE UMIDADE POR ASCENSÃO CAPILAR EM PAREDES
                </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-danger">LIVE INBEC</button>
                    </div>
                    <small class="text-muted">2 hs</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{asset('img/thumb3.png')}}">
                <div class="card-body">
                  <p class="card-text">INDÚSTRIA 4.0: DO FÍSICO AO DIGITAL - UMA NOVA ERA

                </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-danger">LIVE INBEC</button>
                    </div>
                    <small class="text-muted">2 hs</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{asset('img/thumb1.png')}}">
                <div class="card-body">
                  <p class="card-text">SEGURANÇA ESTRUTURAL CONTRA INCÊNDIO
                </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-danger">LIVE INBEC</button>

                    </div>
                    <small class="text-muted">20 hs</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Faça seu cadastro e obtenha o conteúdo exclusivo.</h5>
      </li>
      <li class="list-inline-item">
        <a href="{{ route('register') }}" class="btn btn-danger btn-rounded">Cadastre-se</a>
      </li>
    </ul>
    <!-- Call to action -->

    <hr>





  </footer>
  <!-- Footer -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://www.inbec.com.br"> INBEC - Instituto Brasileiro de Educação Continuada</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->




        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div> --}}
        <script src="{{asset('lib/bootstrap/dist/js/bootstrap.js')}}"></script>
        <script src="{{asset('lib/jquery/dist/js/jquery.js')}}"></script>

         <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
