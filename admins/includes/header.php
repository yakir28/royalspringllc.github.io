<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>
      <form action="register/logout.php" method="post">
      <h5><strong>hallo `<?php echo $_SESSION['admin_name'];?>`</strong> <button name="logout"><small>logout</small></button></h5>
    </form>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      </ul>
    </header>
  </div>