<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="{{ url('/')}}" class="navbar-brand">
        <img src="{{ asset('/img/logo5.png')}}" alt="CodeCafe Logo" width="200" class=" mr-2 logo-nav"
             style="opacity: .8">
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ url('/forum')}}" class="nav-link btn-nav h-75">Forum</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
            <div class="form-group has-search">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Search">
              </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a href="{{ url('/masuk')}}" class=" btn btn-primary btn-masuk mr-1">Masuk</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/daftar')}}" class="btn btn-block btn-outline-primary btn-daftar">Daftar</a>
        </li>
      </ul>
    </div>
  </nav>