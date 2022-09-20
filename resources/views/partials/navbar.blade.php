  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="#"> <i class="bi bi-arrows-move"></i>CASA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($title ==="Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title ==="About") ? 'active' : '' }}"href="/about">About</a>
          
        </li>

         <li class="nav-item">
          <a class="nav-link {{ ($title ==="Posts") ? 'active' : '' }}"href="/blog">Post</a> 
        </li>

        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/">Home</a></li>
            <li><a class="dropdCDown-item" href="/about">About</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/tes">Tes</a></li>
          </ul>

        </li>  --}}
      </ul>
      <form class="d-flex">
        <ion-icon name="log-out-outline"></ion-icon>
      </form>
      <ul class="navbar-nav"> 
       <li class="nav-item"> 
           <a href="/login" class="nav-link {{ ($title ==="login") ? 'active' : '' }}"> 
            <i class="bi bi-box-arrow-in-right"></i>
              Login
          </a>
      </li>
      </ul>
    </div>
  </div>
</nav>