{{-- Navbar halaman --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/home"><img src="{{ asset('assets/code.png') }}" width="40px" height="40px"
            alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $slug === 'home' ? 'active' : '' }}" aria-current="page"
                        href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $slug === 'profil' ? 'active' : '' }}" aria-current="page"
                        href="/profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $slug === 'mahasiswa' ? 'active' : '' }}" aria-current="page"
                        href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $slug === 'prodi' ? 'active' : '' }}" aria-current="page"
                        href="/prodi">Prodi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
