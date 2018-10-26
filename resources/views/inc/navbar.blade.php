
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand active" href="/">{{config('app.name','myWeb')}}</a>
    <span class="navbar-toggler" onclick="shownav()" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </span>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="/posts">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/about">About</a>
            <a class="nav-item nav-link" href="/service">Services</a>
        </div>
    </div>
    {{-- <script>
        var click = document.getElementById('navbarNavAltMarkup');
        function shownav(){
            click.style.display = 'block';
        }
    </script> --}}
</nav>