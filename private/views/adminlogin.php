<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?=ROOT?>/adminlog.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        .fulldiv{
            background: linear-gradient(90deg, #FD9F9F 0%, #FFFFFF 100%); 
        }

        input {
            /* padding:auto; */
            /* margin-left:1rem; */
        }
    </style>
</head>


<body class="bdy">

<div class="fulldiv">
    <div class="split left">

    </div>

    <div class="split right">
        <div class="main">
        <div class="logo"><img class="logo-1" src="./img/Logo.png" alt=""></div>

        
           
            <div class="item-2">
                <div class="welcome-back">Welcome</div>
                <?php print_r($err);?>
                <div class="login-to-your-account">Login into your account</div>
            </div>
            <div class="login-form">
                <form class="login" method="post">
                    <div><input class="input" type="text" placeholder=" Username / Email" name="uname"></div>
                    <div><input class="input" type="password" placeholder=" Password" name="password"></div>
                    <div class="forget-password"><a href="">Reset Password</a> </div>
                    <div><button type="submit" class="login-button" name="submit">Log In</button></div>
                </form>
            </div>

        
        </div>
    </div>
    </div>



</body>

</html>