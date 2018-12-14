<html>
    <head>
        <link href="css/login.css" rel="stylesheet"/>
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/login.js"></script>
    </head>
    <body>
        <div id="box">
            <div id="main"></div>

            <div id="loginform">
                <h1>LOGIN</h1>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail"/><br>
                    <input type="password" name="pwd" placeholder="Password"/><br>
                    <button type="submit" name="login-submit">LOGIN</button>
                </form>
            </div>

            <div id="signupform">
                <h1>SIGN UP</h1>
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username"/><br>
                    <input type="text" name="mail" placeholder="E-mail"/><br>
                    <input type="password" name="pwd" placeholder="Password"/><br>
                    <input type="password" name="pwd-repeat" placeholder="Repeat password"/><br>
                    <button type="submit" name="signup-submit">SIGN UP</button>
                </form>
            </div>

            <div id="login_msg">Have an account?</div>
            <div id="signup_msg">Don't have an account?</div>

            <button id="login_btn">LOGIN</button>
            <button id="signup_btn">SIGN UP</button>
        </div>
    </body>
</html>