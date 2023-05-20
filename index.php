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
        <div class="card">
            <a class="singup">Sign Up</a>
            <div class="inputBox1">
                <input type="text" required="required">
                <span class="user">Email</span>
            </div>

            <div class="inputBox">
                <input type="text" required="required">
                <span>Username</span>
            </div>

            <div class="inputBox">
                <input type="password" required="required">
                <span>Password</span>
            </div>

            <button class="enter">Enter</button>

        </div>
    </div>
</body>

</html>