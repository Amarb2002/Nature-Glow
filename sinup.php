<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
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
            <h1 id="title">SIGN UP</h1>
            <form name="form1" method="post" action="../st_hub/sinup1.php">
                <div class="">
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Enter First Name" id="fn" name="fn">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-users"></i>
                        <input type="password" placeholder="Enter Last Name" id="ln" name="ln">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" placeholder="Enter Email ID" id="em" name="em">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-mobile-screen"></i>
                        <input type="text" placeholder="Enter Mobile Number" id="mob" name="mob">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-city"></i>
                        <input type="text" placeholder="Enter Your City" id="cy" name="cy">
                    </div>
                   
                </div>
                <div class="btn-field">
                    <button id="signin" type="button" class="disable">Reset</button>
                    <button id="signup" type="submit">Sign Up</button>
                </div>
                </br>
                <div>
                    <p>if Already have Account To Sign In
                        <a href="login.php"> Click Here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>