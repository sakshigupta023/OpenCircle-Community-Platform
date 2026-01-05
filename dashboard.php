<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | OpenCircle</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-light">

<?php include("includes/navbar.php"); ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card shadow-lg border-0">
        <div class="card-body text-center p-5">

          <h2 class="mb-3">
            <i class="bi bi-heart-fill text-danger"></i>
            Welcome to OpenCircle
          </h2>

          <p class="text-muted mb-4">
            A safe space to express your thoughts freely & anonymously.
          </p>

          <a href="create_post.php" class="btn btn-primary btn-lg me-2">
            <i class="bi bi-pencil"></i> Create Post
          </a>

          <a href="feed.php" class="btn btn-outline-dark btn-lg">
            <i class="bi bi-chat-dots"></i> View Feed
          </a>

        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
