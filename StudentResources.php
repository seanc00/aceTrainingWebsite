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
include "FilesManaging.php";


?>
<body>
    <div class = "hero">
        <?php include "importFiles/studentNav.php" ?>

        <div class="StudentLinks">

            <a href="StudentPage.php" class="StudentButton">Student Home</a>

            <a href="StudentReading.php" class="StudentButton">Reading</a>
 
            <a href="StudentQuizzes.php" class="StudentButton">Quizzes</a>


        </div>


        <br>
        <br>
        <br>
        <br>


        <div class="resources">
<!--
        <form action="FilesManaging.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>

-->
        <br>
        <br>
        <br>
        <br>

        <div class="resources">
            <table>
            <thead>
                <th>ID</th>
                <th>Filename</th>
                <th>size</th>
                <th>Downloads</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php foreach ($files as $file): ?>
                <tr>
                <td><?php echo $file['ID']; ?></td>
                <td><?php echo $file['name']; ?></td>
                <td><?php echo floor($file['size'] / 1024) . ' KB'; ?></td>
                <td><?php echo $file['downloads']; ?></td>
                <td><a href="StudentResources.php?ID=<?php echo $file['ID'] ?>">Download</a></td>
                </tr>
            <?php endforeach;?>

            </tbody>
            </table>
        </div>
        </div>
        
        <?php include "importFiles/studentFooter.php" ?>
 
    </div>
    
</body>

</html>