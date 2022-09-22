<header id="main-header">
    <nav class="container d-flex">
        <figure>
            <a href="#">
                <img src="/img/dc-logo.png" alt="DC Comics Logo">
            </a>
        </figure>
        <div>
            <ul class="d-flex">
                <li><a href="{{ url('/') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('comics.index') }}" class="{{ Request::is('comics*') ? 'active' : '' }}">Comics</a></li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron"></div>
</header>