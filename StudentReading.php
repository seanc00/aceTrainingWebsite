<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACE TRAINING </title>
    <link rel = "stylesheet" href="style.css">

</head>
<?php
session_start();
$_SESSION['loginFirstname'];
$_SESSION["loginLastname"];

$firstname = $_SESSION['loginFirstname']; 
$lastname = $_SESSION["loginLastname"] ;
//include "LogMeIn.php";



?>
<body>
    <div class = "hero">
        <?php include "importFiles/studentNav.php" ?>


        <div class="StudentLinks">

            <a href="StudentResources.php" class="StudentButton">Resources</a>

            <a href="StudentPage.php" class="StudentButton">Student Home</a>
 
            <a href="StudentQuiz.php" class="StudentButton">Quizzes</a>
            
            <a href="StudentCourses.php" class="StudentButton">Courses</a>


        </div>

        <?php include "importFiles/studentFooter.php" ?>
    </div>
    
</body>

</html>
