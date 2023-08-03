<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{ URL::to('/home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Tableau de bord

              </p>
            </a>

          </li>
          @if(auth()->user()->role=='Admin')
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Gestion des employés

              </p>
              <i class="fas fa-angle-down"></i>
              <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ URL::to('/all-user') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Liste des employés</p>
                    </a>
                  </li>
              <li class="nav-item">
                <a href="{{ URL::to('/adduser-index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un employé</p>
                </a>
              </li>

              </li>
            </li>

            <li class="nav-item">
                <a href="{{URL::to('/filtre')}}" class="nav-link">
                  <i class="fas fa-copy"></i>
                  <p>
                  Paie

                  </p>
                </a>
              </li>

        </ul>
        @endif
                  @if(auth()->user()->role=='employe')

                <li class="nav-item">
                    <a href="{{URL::to('/filtre_employe')}}" class="nav-link">
                      <i class="fas fa-copy"></i>
                      <p>
                      Paie

                      </p>
                    </a>
                  </li>
                  @endif
                  <li class="nav-item">
                    <a href="{{URL::to('/profile')}}" class="nav-link">
                      <i class="fas fa-user"></i>
                      <p>
                      Profile

                      </p>
                    </a>
                  </li>










      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
