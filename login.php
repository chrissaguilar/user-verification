<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
          crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div">
                <form action="signup.php" method="post">
                    <h3 class="text-center">Register</h3>

                    <!--                        <div class="alert alert-danger">-->
                    <!--                            <li>Username required</li>-->
                    <!--                        </div>-->

                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="passwordConf">Password Confirmation:</label>
                        <input type="password" name="passwordConf" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">
                            Sign Up
                        </button>
                    </div>
                    <p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>