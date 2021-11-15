<!DOCTYPE html>
<html>

<head>
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        html,
        body {
            display: flex;
            justify-content: center;
            font-family: Roboto, Arial, sans-serif;
            font-size: 15px;
        }

        form {
            border: 5px solid #f1f1f1;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 16px 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #8ebf42;
            color: white;
            padding: 14px 0;
            margin: 10px 0;
            border: none;
            cursor: grabbing;
            width: 100%;
        }

        h1 {
            text-align: center;
            font-size: 18;
        }

        button:hover {
            opacity: 0.8;
        }

        .formcontainer {
            text-align: left;
            margin: 24px 50px 12px;
        }

        .container {
            padding: 16px 0;
            text-align: left;
        }

        span.psw {
            float: right;
            padding-top: 0;
            padding-right: 15px;
        }

        .text-danger {
            color: red;
        }

        /* Change styles for span on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
        }
    </style>
</head>

<body>
    <?php
    if(!isset($_COOKIE['is_user_loggedin'])) {
        $loginStatus = false;
    }else {
        $loginStatus = true;
        $uname = $_COOKIE['is_user_loggedin'];
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uname = $_REQUEST['uname'];
        $pwd = $_REQUEST['psw'];
        $unameErr = $pwdErr = "";
        if (empty($uname)) {
            $unameErr = "UserName is required.";
        }
        if (empty($pwd)) {
            $pwdErr = "Password is required.";
        }

        if ($uname == 'admin1' && $pwd == 'admin1') {
            $loginStatus = true;
            setcookie('is_user_loggedin', $uname, 0, "/webcourse-php/");
        }else {
            $unameErr = "UserName and Password doesn't match.";
        }
    }
    if ($loginStatus) {
    ?>
       <h1>Welcome User <?php echo $uname; ?></h1>
    <?php
    } else {
    ?>
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h1>Login Form</h1>
            <div class="formcontainer">
                <hr />
                <div class="container">
                    <label for="uname"><strong>Username </strong></label><br />
                    <span class="text-danger"><?= $unameErr ?></span>
                    <input type="text" placeholder="Enter Username" name="uname" value="<?= $uname ?>" required>

                    <label for="psw"><strong>Password </strong></label><br />
                    <span class="text-danger"><?= $pwdErr ?></span>
                    <input type="password" placeholder="Enter Password" name="psw" value="<?= $pwd ?>" required>

                </div>
                <button type="submit">Login</button>
                <div class="container" style="background-color: #eee">
                    <label style="padding-left: 15px">
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <span class="psw"><a href="#"> Forgot password?</a></span>
                </div>
        </form>
    <?php } ?>

</body>

</html>