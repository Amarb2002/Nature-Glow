

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Recovery</title>
    <link rel="stylesheet" href="login_tmp/logd.css">
    <script src="login_tmp/symbol.js"></script>
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Find Account</h1>
            <form name="form1" method="post" action="forgotpass1.jsp">
                <div class="" style="height: 100px;">
                    <div class="input-field">
                        <i class="fa-solid fa-circle-user"></i>
                        <input type="text" autocomplete="off" placeholder="Username" id="uname" name="uname">
                    </div>
                    <p> Back to LogIn
                        <a href="login.jsp"> Click Here</a>
                    </p>
                </div>
                <div class="btn-field">
                    <button id="valid" name="valid" type="Submit">Find</button>
                    <button id="signup" type="reset" class="disable">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>