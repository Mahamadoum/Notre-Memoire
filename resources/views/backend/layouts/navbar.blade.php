<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">

            <a class="nav-link text-dark" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i> {{ Auth::user()->name }} <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout').submit();">
                    <button class="btn btn-outline-danger"><i class="fas fa-sign-out-alt"></i> Se déconnecter </button>
                </a>

                <form id="logout" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

      </li>

    </ul>
  </nav>



 <!-- Bootstrap 4 -->
 <script src="{{ URL::to('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <link rel="stylesheet" href="{{ URL::to('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
 <!-- ChartJS -->
 <script src="{{ URL::to('backend/plugins/chart.js/Chart.min.js') }}"></script>
