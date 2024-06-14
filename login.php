<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Hub</title>
    <link rel="stylesheet" href="source/CSS/logd.css">
    <script src="source/CSS/symbol.js"></script>
    <style>
        .container {
            background-image: linear-gradient(rgba(145, 232, 152, 0.258), rgba(145, 232, 152, 0.358)), url(source/CSS/log-bg.jpg);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">SIGN IN</h1>
            <form name="form1" method="post" action="logchk.php">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-circle-user"></i>
                        <input type="text" placeholder="Username" id="uname" name="uname">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="password" id="pass" name="pass">
                    </div>
                    <p> Create Account
                        <a href="sinup.php"> Click Here</a>&nbsp; &nbsp;
                        Forgot Password
                        <a href="forgotpass.php"> Click Here</a>
                    </p>
                </div>
                <div class="btn-field">
                    <button id="valid" name="valid" type="Submit">Sign In</button>
                    <button id="signup" type="reset" class="disable">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>