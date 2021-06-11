<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <router-link to="/dashboard" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt white"></i>
          <p>
            Dashboard
          </p>
        </router-link>
      </li>

      <li class="nav-item">
        <router-link to="/products" class="nav-link">
          <i class="nav-icon fas fa-box-open yellow"></i>
          <p>
            Product
          </p>
        </router-link>
      </li>
      

      @can('isAdmin')
        <li class="nav-item">
          <router-link to="/users" class="nav-link">
            <i class="fa fa-users nav-icon purple"></i>
            <p>Users</p>
          </router-link>
        </li>
      @endcan

      

      @can('isAdmin')
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-cog green"></i>
          <p>
            Settings
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <router-link to="/product/category" class="nav-link">
              <i class="nav-icon fas fa-list-ol blue"></i>
              <p>
                Category
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/product/tag" class="nav-link">
              <i class="nav-icon fas fa-tags green"></i>
              <p>
                Tags
              </p>
            </router-link>
          </li>
          
            <li class="nav-item">
              <router-link to="/developer" class="nav-link">
                  <i class="nav-icon fas fa-cogs white"></i>
                  <p>
                      Developer
                  </p>
              </router-link>
            </li>
        </ul>
      </li>

      @endcan
      
      

      <li class="nav-item">
        <a href="#" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-sign-out-alt red"></i>
          <p>
            {{ __('Logout') }}
          </p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
  </nav>