<?php
// include_once 'includes/db_connect.php';
// include_once 'includes/functions.php';

// sec_session_start();

// if (login_check($mysqli) == true) {
//     $logged = 'in';
// } else {
//     $logged = 'out';
// }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login RPLA</title>
    <link rel="stylesheet" href="./style/style.css" />
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        echo '<p class="error">Error Logging In!</p>';
    }
    ?>
    <div class="container">
        <div class="login-box">
            <p>Login</p>
            <form>
                <div class="user-box">
                    <input name="email" type="text">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" id="password" />
                    <label>Password</label>
                </div>
                <input id="a" type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
            </form>
            <p>Don't have an account? <a href="register.php" class="a2">Sign up!</a></p>
        </div>
    </div>
</body>

</html>