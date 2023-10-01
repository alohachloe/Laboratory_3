<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .splash-container {
            text-align: center;
            margin-top: 50px;
        }

        .card {
            width: 300px;
            margin: 0 auto;
        }

        .card-header {
            background-color: #007bff;
            color: #ffffff;
        }

        .logo-img {
            max-width: 100px;
            margin-top: 20px;
        }

        .splash-description {
            color: #333;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .custom-checkbox {
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .card-footer-item {
            margin-top: 10px;
        }

        .footer-link {
            text-decoration: none;
            color: #007bff;
        }

        .footer-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><a href="/"><img class="logo-img" src="../assets/images/logo.png"
                        alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <?php if (isset($error)) : ?>
                <p><?php echo $error; ?></p>
                <?php endif; ?>
                <form>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember
                                Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="signup" class="footer-link">Create An Account</a>
                </div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="fPass" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
