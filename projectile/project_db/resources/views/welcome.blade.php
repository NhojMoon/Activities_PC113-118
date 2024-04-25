<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Login Form</title>
    
</head>
<body>
    <div class="container">
        <form id="loginform" class="login-form" action="" method="POST">
            <img src="assets/img/user.svg" alt="User Icon" class="user-icon">
            <div class="form-group">
                <div id="message" class="alert-message"></div>
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" name="email" class="form-input" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-input" placeholder="Password">
            </div>
            <button type="submit" class="form-button">Login</button>
            <p class="text-sm mt-4 text-center">Don't have an account? <a href="register.html" for="login" class="text-indigo-500 cursor-pointer">Register Here</a></p>
        </form>
    </div>

</body>
</html>
