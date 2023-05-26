<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script.js"></script>
    <title>ACE TRAINING </title>
    <link rel = "stylesheet" href="style.css">
</head>

<body>
    <div class = "hero">
        <?php include "importFiles/nav.php" ?>


        <div class = "loginContainer">
            <form action="LogMeIn.php" name="login" onsubmit = "return validateLogin()" method="post" >

                Email:<input type="text" id="email" name="email" type="text" placeholder = "example@email.com"><br>
                Password:<input type="password" id="password" name="password">
                <input type="checkbox" onClick="showPassword()"/>Show password
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class = "registerNowMessage"><h4>Don't have an account? <a href = "register.php">Sign up now!</a></h4></div>

        <div class = "loginGap"></div>


        <?php include "importFiles/footer.php" ?>

    </div>   
    <script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>