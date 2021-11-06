<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Starter Template</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>

  <body>

    <div class="container">
         <div class="row border-dark mb-2">
            <div  class="col-3 logo">
                <a href="{{url('/')}} "><img class="logo" src="{{ asset('img/logo.png') }}"></a>
            </div>
    
    <div class="col-7  navigation text-center">
        <label id="tytul">Sprawozdania z realizacji Programu "Aktywna tablica" </label>
        <div>
                   
            @if (get_route_controller() ==='Wniosek_dyrektoraController')
            <a href="{{ url('/wniosek_dyrektora/') }}"  class="btn btn-outline-primary active m-2" role="button">Sprawozdanie dyrektora</a>
            @else
            <a href="{{ url('/wniosek_dyrektora/') }}"  class="btn btn-outline-primary m-2" role="button">Sprawozdanie dyrektora</a>
            @endif
            
            
            <a href="sprawozdanie_organu" class="btn btn-outline-primary m-2" role="button">Sprawozdanie organu</a>
        </div>
    </div>
            
        </div >
        
        
        