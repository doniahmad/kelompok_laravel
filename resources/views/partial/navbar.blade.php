<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Profile') ? 'active' : '' }}" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Inventory') ? 'active' : '' }}" href="/inventory">Inventory</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Kelompok') ? 'active' : '' }}" href="/kelompok">Kelompok</a>
        </li>
      </ul>
    </div>
  </div>
    </nav>
