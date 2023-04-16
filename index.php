<?php
    session_start();
     $_SESSION;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login page</title>
            <link rel="stylesheet" href="style.css">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.
    	css' rel='stylesheet'>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.
    	css/3.7.2/animate.min.css">
    </head>

    <body>
        <div class="background"></div>
        <div class="container">
            <div class="content">
                <div class="" text-sci>
                    <br></br>
                    <br></br>
                    <br></br>
                    <br></br>
                    <br></br>
                    <br></br>
                    <h1>Welcome!<br><span>To our Website.</span></h1>
                    <br></br>
                    <h3>:<span class="change_content"></span></h3>
                    </span>
                    </h2>
                </div>
            </div>
            <div class="logreg-box">
                <div class="form-box login">
                    <form method="POST" action="connection1.php">
                        <h2>Sign In</h2>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope' ></i></span>
                            <input type="email" required name="user_id">
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bx-key'></i></span>
                            <input type="password" required name="password">
                            <label>Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label>
						<input type="checkbox">Remember me</label>
                            <a href="#">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn">Sign In</button>

                        <div class="login-register">
                            <p>Don't have an account?<a href="#" class="register-link"> Sign up </a></p>
                        </div>
                    </form>
                </div>
                <div class="form-box register">
                    <form method = "POST" action="connection.php">
                        <h2>Sign Up</h2>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user-circle' ></i></span>
                            <input type="name" required name="user_name">
                            <label>Name</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope' ></i></span>
                            <input type="email" required name="user_id">
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bx-key'></i></span>
                            <input type="password" required name="password">
                            <label>Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label>
						<input type="checkbox">I agree to the terms and conditions </label>
                        </div>
                        <button type="submit" class="btn" >Sign Up</button>

                        <div class="login-register">
                            <p>Already have an account?<a href="#" class="login-link"> Sign in </a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>