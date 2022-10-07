  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
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
      </ul>
      <form class="d-flex">
        <ion-icon name="log-out-outline"></ion-icon>
      </form>

      <ul class="navbar-nav ms-auto"> 
      @auth
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-card-list"></i>Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"> <i class="bi bi-box-arrow-left">
                  </i>Logout</a></button>
              </form>
            </li>
          </ul>
        </li>
      @else    
       <li class="nav-item"> 
           <a href="/login" class="nav-link {{ ($title ==="login") ? 'active' : '' }}"> 
            <i class="bi bi-box-arrow-in-right"></i>
              Login
          </a>
      </li>
      @endauth
    </ul>

    </div>
  </div>
</nav>



 <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <form action ="/logout" method="post">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </form>
    </div>