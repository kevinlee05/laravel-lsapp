<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="/">{{ config('app.name', 'LSAPP') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Posts</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/posts/create">Create Post</a></li>
        </ul>
    </div>
</nav>    