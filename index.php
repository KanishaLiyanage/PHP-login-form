<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Log In Styles.css">
    <link rel="stylesheet" href="css/Button Styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Log In</title>
</head>
<body>
    
    <div class="LoginCard">

        <form class="LoginForm" method="POST" action="form_query.php">

            <img src="/Log In Page/Images/avatar.jpg" alt="vector avatar">

            <h2 class="Signin"> Sign In </h2>

            <h5 class="username"> Username </h5>
            <input class="usernameInput" type="text" name="username" size="20" maxlength="10" required> 
            <input class="clearusername" type="reset" value="clear">

            <h5 class="Password"> Password </h5>
            <input class="PasswordInput" type="password" name="password" size="20" maxlength="8" required>
            <input class="clearpassword" type="reset" value="clear">

            <h5 class="Forgot"> Forgot password? </h5>

            <button class="formsubmit" type="submit">Login</button>

            <!-- <input class="formsubmit" type="submit" value="Log In"> -->

            <h5 class="OR"> Or </h5>

            <button class="loginGoogle"> <i class="fa fa-google" aria-hidden="true"></i> Sign up with Google </button>

            <h6 class="SignUp"> Don't have an account? </h6>
            <button class="SignupButton"> Sign Up </button>
    
            </form>
    
    </div>

</body>
</html>