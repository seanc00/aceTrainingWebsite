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

            <a href="StudentReading.php" class="StudentButton">Reading</a>
 
            <a href="StudentQuiz.php" class="StudentButton">Quizzes</a>
            
            <a href="StudentCourses.php" class="StudentButton">Courses</a>


        </div>

 <?php
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "root", "acetraining");

        // Retrieve the authorized enrollments for the user
        $user_ID; 
        $sql = "SELECT enrollments.enrollment_id, courses.course_name, enrollments.status
                FROM enrollments
                INNER JOIN courses ON enrollments.course_ID = courses.course_ID
                WHERE enrollments.user_ID = ?
                AND enrollments.status = 'authorized'";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_ID);
        $stmt->execute();
        $result = $stmt->get_result();
        ?>

        <!-- Display the enrollments in a table -->
        <table>
            <thead>
                <tr>
                    <th>Enrollment ID</th>
                    <th>Course Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['enrollment_id']; ?></td>
                        <td><?php echo $row['course_name']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <?php
        $stmt->close();
        mysqli_free_result($result);
        ?>


        <?php include "importFiles/studentFooter.php" ?>

    </div>
    
</body>

</html>
