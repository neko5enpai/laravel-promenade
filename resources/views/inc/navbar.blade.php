<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('app.name', 'Promenades') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
              <li><a href="/promenades">Promenades</a></li>
              <li><a href="/promenades/creer">Créer</a></li>
              <li><a href="/promenades/editer">Editer</a></li>
            </ul>

            {{-- <ul class="nav navbar-nav navbar-right">
                <li><a href="/promenades/creer">Créer Promenade</a></li>
            </ul> --}}
            
        </div>
    </div>
</nav>