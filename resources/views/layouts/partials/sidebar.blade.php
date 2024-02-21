<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div>
        Admin <b class="font-black">One</b>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li class="{{ Route::is('dashboard') ? 'active': '' }}">
          <a href="{{ route('dashboard') }}">
            <span class="icon"><i class="ri-dashboard-line"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
        <li class="{{ Route::is('profile.*') ? 'active': '' }}">
          <a href="{{ route('profile.index') }}">
            <span class="icon"><i class="ri-user-3-line"></i></span>
            <span class="menu-item-label">Profile</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>