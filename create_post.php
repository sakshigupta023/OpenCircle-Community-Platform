<?php
session_start();
include("config/db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['post'])) {
    $content = $_POST['content'];
    $anonymous = isset($_POST['anonymous']) ? 1 : 0;
    $user_id = $_SESSION['user_id'];

    mysqli_query($conn,
        "INSERT INTO posts (user_id, content, is_anonymous)
         VALUES ('$user_id', '$content', '$anonymous')"
    );

    header("Location: feed.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Post | OpenCircle</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-light">

<?php include("includes/navbar.php"); ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card shadow">
        <div class="card-body">

          <h4 class="mb-3">
            <i class="bi bi-pencil-square"></i> Create a Post
          </h4>

          <form method="POST">
            <textarea name="content" class="form-control mb-3" rows="4"
              placeholder="Write your thoughts..." required></textarea>

            <div class="form-check mb-3">
              <input type="checkbox" name="anonymous" class="form-check-input">
              <label class="form-check-label">Post anonymously</label>
            </div>

            <button type="submit" name="post" class="btn btn-primary">
              <i class="bi bi-send"></i> Post
            </button>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
