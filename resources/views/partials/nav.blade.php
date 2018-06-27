<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="navbar-nav ml-auto">
                <a class="navbar-brand" href="{{ url('/') }}">
                   JQuiz
                </a>
            </div>
            <div class="navbar-nav ml-auto" style="
            float:right;">
                <a href="{{ route('auth.login') }}" class="btn btn-links" style="color:aliceblue">Login</a>
                <a href="{{ route('auth.register') }}" class="btn btn-links" style="color:aliceblue">Register</a>
            </div>
        </div>
    </nav>