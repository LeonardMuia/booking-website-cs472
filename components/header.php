<nav class="py-2 bg-light border-bottom">
  <div class="container d-flex flex-wrap">
    <ul class="nav me-auto">
        <li class="nav-item"><a href="<?php echo build_url('hotels')?>" class="nav-link link-dark px-2">Hotels</a></li>
        <li class="nav-item"><a href="<?php echo build_url('restaurants')?>" class="nav-link link-dark px-2">Restaurants</a></li>
        <li class="nav-item"><a href="<?php echo build_url('spa')?>" class="nav-link link-dark px-2">Spa</a></li>
    </ul>

    <?php 
    
    if(isset($_SESSION['username'])){ ?>

      <ul class="nav align-items-center">
      <div class="text-sm">Logged in as:</div>
        <li class="nav-item px-2 mt-0 mb-0 h6">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Leonard
        </a>
        <ul class="dropdown-menu text-small shadow" style="">
          <li><a class="dropdown-item" href="<?php echo build_url('my-account'); ?>">My Account</a></li>
          <li><a class="dropdown-item" href="<?php echo build_url('my-account#profile'); ?>">My Profile</a></li>
          <li><a class="dropdown-item" href="<?php echo build_url('my-account#settings'); ?>">Settings</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?php echo build_url('logout'); ?>">Sign out</a></li>
        </ul>
      </ul>
    
    <?php } else { ?>
    
      <ul class="nav">
        <li class="nav-item"><a href="<?php echo build_url('login')?>" class="nav-link link-dark px-2">Sign In</a></li>
        <li class="nav-item"><a href="<?php echo build_url('register')?>" class="nav-link link-dark px-2">Create an Account</a></li>
      </ul>

    <?php } ?>

  </div>
</nav>

<header class="py-3 mb-0 border-bottom">
  <div class="container d-flex flex-wrap justify-content-center align-items-center">
    <a href="<?php echo build_url('')?>" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
      <img class="header-logo" src="images/logo.png" alt="logo">
      <span class="h2 fs-4 text-accent">Travel Bookings</span>
    </a>

    <a href="<?php echo build_url('create-listing') ?>">
      <button class="nav__list_button shadow">List your place</button>
    </a>
    
  </div>
</header>