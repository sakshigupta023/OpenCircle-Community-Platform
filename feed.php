<?php
session_start();
include("config/db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$query = "
SELECT posts.*, users.name 
FROM posts 
LEFT JOIN users ON posts.user_id = users.id 
ORDER BY posts.created_at DESC
";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feed | OpenCircle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php include("includes/navbar.php"); ?>
<div class="mb-4">
    <h4 class="mb-1">Community Space</h4>
    <p class="text-muted mb-0">
        A place where people can share their thoughts, experiences, and perspectives.
    </p>
</div>

<div class="container mt-4">

<?php if (mysqli_num_rows($result) == 0): ?>
    <div class="alert alert-info text-center">
        No posts yet 🌱 Be the first one to share.
    </div>
<?php endif; ?>

<?php while ($row = mysqli_fetch_assoc($result)): ?>

<div class="card shadow-sm mb-3">
  <div class="card-body">
    <div class="d-flex justify-content-between">
      <strong>
    <?= $row['is_anonymous'] ? 'Anonymous User' : htmlspecialchars($row['name']) ?>
</strong>

      <small class="text-muted">
        <?= date("d M Y, h:i A", strtotime($row['created_at'])) ?>
      </small>
    </div>

    <p class="mt-2 mb-0">
      <?= nl2br(htmlspecialchars($row['content'])) ?>
    </p>
  </div>
</div>

<?php endwhile; ?>

</div>

</body>
</html>
