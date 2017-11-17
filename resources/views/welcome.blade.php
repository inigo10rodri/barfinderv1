<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/estiloWelcome.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
              integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
              crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
                integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
                crossorigin=""></script>
        <script>

            function initmap()
            {
                var mymap = L.map('mapid').setView([ 43.3172,-1.97325],17);

                L.tileLayer('https://api.mapbox.com/styles/v1/marborav/cj9x42mma6cqq2sp7e7gadryt/tiles/256/{z}/{x}/{y}?access_token={accessToken}', {
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
                    maxZoom: 20,
                    id: 'mapbox.streets',
                    accessToken: 'pk.eyJ1IjoibWFyYm9yYXYiLCJhIjoiY2o5eDJrbTV0N2NncjJxcXljeDR3cXNhMiJ9.igTamTLm4nLiAN6w8NFS6Q'
                }).addTo(mymap);

                var marker = L.marker([51.5, -0.09]).addTo(mymap);


            }

            function onMapClick(e) {
                popup.setLatLng(e.latlng).setContent("You clicked the map at " + e.latlng.toString()).openOn(mymap);
            }

        </script>

    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Kampai') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>


            <div class="content">
               <div id="brindis">
                <div class="title">
                    Busca,come,bebe,disfruta!
                </div>

               </div>
                <div id="info">
                    <div id="pnaizq">
                        <h2>¿Tienes sed?¿Tienes hambre?</h2>
                        <h3>Kampai compara entre miles de bares y restaurantes para encontrar lo que buscas</h3>
                    </div>
                    <div id="pnadr">
                        <div id="cuadrin">
                            <div id="abu"></div>
                            <h2>Rapido y facil de usar!</h2>
                            <h4>-Abuela Carmen premiun user</h4>
                        </div>
                    </div>

                </div>
                <div id="mapid"></div>
                <script type="text/javascript">

                    initmap();

                </script>

            </div>
            <div id="foot">
                Futuro footer!
                Con las redes sociales y esas cosas!
            </div>


    </body>
</html>
