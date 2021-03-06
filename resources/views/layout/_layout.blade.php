<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}">
    
    <title>e-fisio | @yield('page')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    @yield('style')
  </head>
  <body>
    @hasSection ('fisio')
      @component('components.navbar-fisio')
      @endcomponent
    @endif
    @hasSection ('fisio')
      @yield('fisio')
    @endif
    @hasSection ('paciente')
        @component('components.navbar-paciente')
        @endcomponent
    @endif
    @hasSection('paciente')
      @yield('paciente')        
    @endif
    @hasSection ('login')
      @yield('login')
    @endif
    @hasSection ('content')
      @yield('content')
    @endif

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0d46dafe22.js" crossorigin="anonymous"></script>
    @hasSection ('js')
      @yield('js')
    @endif
    <script>
      $('#inputPesquisa').focus(() => {
        $('div.input-group').addClass('input-shadow')
      });
      $('#inputPesquisa').blur(() => {
        $('div.input-group').removeClass('input-shadow')
      });
    </script>
  </body>
</html>