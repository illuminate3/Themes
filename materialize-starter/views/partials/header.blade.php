{{-- header alanı --}}
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="{{-- home_url() --}}" class="brand-logo">
            <img src="{{-- site_logo() --}}" class="ui small image">
        </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">
                {{-- site_name() --}} Site Name
            </h1>
            <div class="row center">
                <h5 class="header col s12 light">
                    {{-- site_description() --}} Site Description
                </h5>
            </div>
            <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="{{ Theme::asset('images/background1.jpg') }}" alt="Unsplashed background img 1"></div>
</div>