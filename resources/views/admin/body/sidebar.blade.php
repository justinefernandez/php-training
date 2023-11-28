<nav class="sidebar">
      <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
          Admin<span>Panel</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>

          @if(Auth::user()->can('type.menu'))
          <li class="nav-item nav-category">Real Estate</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#types" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Property Type</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="types">
              <ul class="nav sub-menu">
                @if(Auth::user()->can('all.type'))
                <li class="nav-item">
                  <a href="{{ route('all.type') }}" class="nav-link">All Type</a>
                </li>
                @endif
                @if(Auth::user()->can('add.type'))
                <li class="nav-item">
                  <a href="{{ route('add.type') }}" class="nav-link">Add Type</a>
                </li>
                @endif
              </ul>
            </div>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#amenitie" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Amenities</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="amenitie">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.amenitie') }}" class="nav-link">All Amenitie</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('add.amenitie') }}" class="nav-link">Add Amenitie</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item nav-category">Role & Permission</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
                <i class="link-icon" data-feather="anchor"></i>
                <span class="link-title">Role & Permission</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="advancedUI">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('all.permission') }}" class="nav-link">All Permission</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('all.roles') }}" class="nav-link">All Roles</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('add.roles.permission') }}" class="nav-link">Role in Permission</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('all.roles.permission') }}" class="nav-link">All Role in Permission</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="admin">
                <i class="link-icon" data-feather="anchor"></i>
                <span class="link-title">Manage Admin User</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="admin">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('all.admin') }}" class="nav-link">All Admin</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('all.roles') }}" class="nav-link">Add Admin</a>
                  </li>
                </ul>
              </div>
            </li>

        </ul>
      </div>
    </nav>