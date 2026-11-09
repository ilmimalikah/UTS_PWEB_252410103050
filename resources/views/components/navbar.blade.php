@props(['username'])

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/dashboard?username={{ $username }}">Turnamen eMeL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard?username={{ $username }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pengelolaan?username={{ $username }}">Pengelolaan Tim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile?username={{ $username }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
