<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script defer src="{{asset('js/app.js')}}"></script>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">The Amazing CDB</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex gap-3 place-items-center">
                  @auth()
                    <div>{{auth()->user()->name}}</div>
                    <form class="d-flex" action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn btn-outline-danger" type="submit">Logout</button>
                    </form>
                  @endauth
                  @guest
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                  </button>
                  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                  </button>
                  @endguest
                    
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main class="container mt-5">
        @yield('main')
    </main>
    <footer>
      <x-modal.login/>
      <x-modal.register/>
    </footer>
</body>
</html>