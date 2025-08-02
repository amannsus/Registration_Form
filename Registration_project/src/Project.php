<?php
include 'config.php';

$alert = null;
if (isset($_SESSION['alerts']) && !empty($_SESSION['alerts'])) {
    $alert = array_shift($_SESSION['alerts']);
}

$name = $_SESSION['name'] ?? 'Student';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>
    <link rel="stylesheet" href="Project.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <?php if ($alert): ?>
    <div class="alert-box">
        <div class="alert <?= $alert['type'] ?>">
            <i class='bx <?= $alert['type'] === 'success' ? 'bx-check-circle' : 'bx-error-circle' ?>'></i>
            <?= $alert['message'] ?>
        </div>
    </div>
    <?php endif; ?>

    
    <header>
        <a href="#" class="logo">Register Here</a>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
        
        
        <?php if (isset($_SESSION['user_id']) && isset($_SESSION['name'])): ?>
            <div class="profile-box">
                <div class="avatar-circle">
                    <?= strtoupper(substr($_SESSION['name'], 0, 1)) ?>
                </div>
                <div class="dropdown">
                    <span>Hey, <?= $_SESSION['name'] ?>!</span>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        <?php else: ?>
            <button class="login-btn-modal">Login</button>
        <?php endif; ?>
    </header>

    
    <section>
        <h1>Welcome <?= $name ?>!</h1>
    </section>

    <!-- Auth Modal -->
    <div class="auth-modal" id="authModal">
        <button class="close-btn-modal">&times;</button>
        
        <!-- Login Form -->
        <div class="form-box login">
            <h2>Login</h2>
            <form action="auth_process.php" method="POST">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bx-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bx-lock-alt'></i>
                </div>
                <button type="submit" name="login_btn" class="btn">Login</button>
                <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
            </form>
        </div>

        <!-- Register Form -->
        <div class="form-box register">
            <h2>Register</h2>
            <form action="auth_process.php" method="POST">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bx-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bx-lock-alt'></i>
                </div>
                <button type="submit" name="register_btn" class="btn">Register</button>
                <p>Already have an account? <a href="#" class="login-link">Login</a></p>
            </form>
        </div>
    </div>

    <script src="Project.js"></script>
</body>
</html>
