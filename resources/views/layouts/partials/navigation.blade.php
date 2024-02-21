<nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item mobile-aside-button">
        <span class="icon"><i class="ri-menu-line"></i></span>
      </a>
    </div>
    <div class="navbar-brand is-right">
      <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
        <span class="icon"><i class="ri-function-line"></i></span>
      </a>
    </div>
    <div class="navbar-menu" id="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item dropdown has-divider has-user-avatar">
          <a class="navbar-link">
            <div class="user-avatar">
              <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
            </div>
            <div class="is-user-name"><span>{{ auth()->user()->last_name }}</span></div>
            <span class="icon"><i class="ri-arrow-down-s-line"></i></span>
          </a>
          <div class="navbar-dropdown">
            <a href="profile.html" class="navbar-item">
              <span class="icon"><i class="ri-user-line"></i></span>
              <span>My Profile</span>
            </a>
            <hr class="navbar-divider">

            <form method="POST" action="{{ route('logout') }}" class="navbar-item">
              @csrf
              <span class="icon"><i class="ri-door-closed-line"></i></span>
              <button type="submit" class="ml-2">Log Out</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
