<?php
include("config/db.php");

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    // Password secure banana
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, password) 
              VALUES ('$name', '$email', '$hashedPassword')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "<script>alert('Email already exists!');</script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register | OpenCircle</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php include("includes/navbar.php"); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-body">

                    <h3 class="text-center mb-4">Create Account</h3>

                    <form method="POST">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button type="submit" name="register" class="btn btn-primary w-100">
                            Register
                        </button>

                    </form>
    <p class="text-center mt-3">
    Already have an account?
    <a href="login.php">Login here</a>
</p>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
