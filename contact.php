<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACE TRAINING </title>
    <link rel = "stylesheet" href="style.css">

</head>

<body>
    <div class = "hero">
        <?php include "importFiles/nav.php" ?>


        <div class = "pic-container">
            
        </div>

        <h1>&nbsp;</h1>

        <h2 class="why-ace">Any Questions? Drop us a Message!</h2>

        <div class="loginContainer">

        <form action = "https://formsubmit.co/attila_bertalan2@yahoo.com" method="POST">

            <input type="text" name="name" placeholder="Name" required>
            <input type="email" class = "contactEmail" name="email" placeholder="Email Address" required>
            <input type="message" name="Message" placeholder="Message" required>
            <button type="submit"  id = "registerSubmitBtn" class="submitButton">Send</button> 
        </form>

        </div>
    </div>

    <div class = "contactUsGap"></div>

    <?php include "importFiles/footer.php" ?>
</body>
