<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navBar">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item {{request()->routeIs('/') ? 'active' : ''}}">
            <a class="nav-link" href="/">Início</a>
        </li>
        <li class="nav-item {{request()->routeIs('produtos.*') ? 'active' : ''}}">
            <a class="nav-link" href="/produtos">Produtos </a>
        </li>
        <li class="nav-item {{request()->routeIs('categorias.*') ? 'active' : ''}}">
            <a class="nav-link" href="/categorias">Categorias </a>
        </li>
    </ul>
</nav>
