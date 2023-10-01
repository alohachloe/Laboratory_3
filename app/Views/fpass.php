<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .splash-container {
            text-align: center;
            margin-top: 50px;
        }

        .card {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 15px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .card-footer {
            background-color: #f9f9f9;
            padding: 15px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .card-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img class="logo-img" src="../assets/images/logo.png"
                    alt="logo"><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form>
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" required=""
                            placeholder="Your Email" autocomplete="off">
                    </div>
                    <div class="form-group pt-1"><a class="btn btn-block btn-primary" href="signup">Reset
                            Password</a></div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="signup">Sign Up</a></span>
            </div>
        </div>
    </div>
</body>

</html>
