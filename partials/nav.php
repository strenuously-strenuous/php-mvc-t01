<nav
  class="navbar navbar-expand-sm"
>
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://www.freeiconspng.com/thumbs/logo-design/logo-design-blank-circle-blue-and-orange-png-2.png" width="50" alt="">
    </a>
    <button
      class="navbar-toggler d-lg-none"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#collapsibleNavId"
      aria-controls="collapsibleNavId"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo check_page('home') ?>" href="home" aria-current="page"
            >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo check_page('about') ?>" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo check_page('blog') ?>" href="blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo check_page('contact') ?>" href="contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>