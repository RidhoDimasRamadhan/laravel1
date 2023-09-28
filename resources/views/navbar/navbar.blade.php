<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($tittle === "Halaman Home") ? 'active' : '' }}" href="/newWallpaper">Home</a>
          <a class="nav-link {{ ($tittle === "Halaman Blog") ?'active' : '' }}"  href="/blog">Blog</a>
          <a class="nav-link {{ ($tittle === "Halaman Identitas") ? 'active' : '' }}"  href="/identitas">Identitas</a>
        </div>
      </div>
    </div>
  </nav>