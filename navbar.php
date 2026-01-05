<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="dashboard.php">
      <i class="bi bi-circle-fill text-success"></i> OpenCircle
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">
            <i class="bi bi-house-door"></i> Dashboard
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="create_post.php">
            <i class="bi bi-pencil-square"></i> Create Post
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="feed.php">
            <i class="bi bi-chat-dots"></i> Feed
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-danger" href="logout.php">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
