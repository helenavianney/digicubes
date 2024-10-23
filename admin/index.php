<?php
require_once '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //cek username di database
    $query = "SELECT * FROM  WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $admin = mysqli_fetch_assoc($result);

        //verifikasi password
        if ($password == $admin['password']) {
            header('location: dashboard.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-form {
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="login-form">
    <div class="card shadow p-4">
        <h3 class="text-center mb-4">Admin Login</h3>
        <form action="dashboard.php" method="POST">
            <!-- Username Input -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>

            <!-- Password Input with Hide/See Feature -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <i class="bi bi-eye"></i> <!-- Bootstrap Icon for the eye -->
                    </button>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS and Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.js"></script>

<!-- JavaScript to Toggle Password Visibility -->
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        // Toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        
        // Toggle the eye slash icon
        this.querySelector('i').classList.toggle('bi-eye');
        this.querySelector('i').classList.toggle('bi-eye-slash');
    });
</script>

</body>
</html>
