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

        <div class="welcomeContainer"> 
            <div class = "pic-container">
                <img src="images/mainpagemainphoto.jpg" class ="MainPhoto">
            </div>

            <div class ="text-container">
                <h1>Welcome To </h1>
                <div class = "titleContainer">
                    <h1><span class = "websiteTitle">Ace Training</span></h1>
                </div>
                <p>Elevate your student life by mastering essential academic skills with Ace Training! We know it can be a challenge to hone these proficiencies alone, but worry no more! Ace Training, created by students for students, is your ultimate online platform to level up your educational journey. So, let's ace academics together!</p>
                <a href="contact.php" class="contactUsLink"> Contact Us! </a>
            </div>
        </div> 


        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>

        <h2 class="why-ace">Meet our team!</h2>

        <!--CREATING EMPTY SPACE TO SPACE OUT TEXT-->


        

        <!--PEOPLE CARD SECTION 1-->
        <div class="card-container1">
            <div class="card">
                <img src="images/avatar1.png" alt="Avatar" style="width:300px; border-radius: 20px;">
                <div class="ourTeamContainer">
                    <h4><b>Adham </b></h4>
                    <p>Chairman</p>
                </div>
            </div>
            <div class="card">
                <img src="images/avatar1.png" alt="Avatar" style="width:300px; border-radius: 20px;" >
                <div class="ourTeamContainer">
                    <h4><b>Sean Connolly</b></h4>
                    <p>Frontend Specialist</p>
                </div>
            </div>     
            
            <div class="card">
                <img src="images/avatar1.png" alt="Avatar" style="width:300px; border-radius: 20px;">
                <div class="ourTeamContainer">
                    <h4><b>Attila Bertalan</b></h4>
                    <p>Computer Scientist</p>
                </div>
            </div> 
         </div>
        <!--END OF CARD SECTION 1-->   


        <!-- MORE EMPTY SPACE-->
        
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <!-- WHY ACE TRAINING PART-->
         <div class="why-ace-div">
            <h2 class="why-ace">Why Ace Training?</h2>

            <p class="why-ace-text">Ace Training prides itself on providing top quality education and training services to students worldwide.<br> 
                The team of passionate and experienced educators at Ace Training are committed to ensuring that<br> all students have the opportunity to achieve their desired learning outcomes.<br>
                Ace Training offers a range of courses and programs that are designed to meet the individual needs of each student. <br>
                The team at Ace Training is dedicated to providing a supportive and inclusive learning environment for all students.</p>
        </div>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>






        <!-- STUDENT REVIEWS-->
        <h2 class="why-ace">Student Reviews</h2>

        <div class="fewStudentReviews">
            <div class="card-student">
                <img src="images/avatar1.png" alt="Avatar" style="width:55%">
                <div class="container-student">
                <h4><b>Micah </b></h4>
                <p>Computer Science Student</p>
                <div class="student-review-text">
                    <p>
                        I recently tried this app and found it incredibly useful, especially for beginners in 
                        computing. Its user-friendly interface made learning an enjoyable experience. I would 
                        recommend it to anyone seeking an effective learning tool.
                    </p>
                </div>
                </div>
            </div>
            <div class="card-student">
                <img src="images/avatar1.png" alt="Avatar" style="width:55%">
                <div class="container-student">
                    <h4><b>Maisie </b></h4>
                    <p>Art Student</p>
                    <div class="student-review-text">
                        <p>
                            The app has been a lifesaver for me as I don't have much expertise 
                            in computing. It's so easy to navigate and really helps users grasp the 
                            concepts quickly. Highly recommended for those who want to learn efficiently.
                        </p>
                    </div>
                </div>
            </div>     
            
            <div class="card-student">
                <img src="images/avatar1.png" alt="Avatar" style="width:55%">
                <div class="container-student">
                    <h4><b>Victor</b></h4>
                    <p>Procrastinator</p>
                    <div class="student-review-text">
                        <p>
                            Amazing! This app has made it so much easier for me to understand 
                            computing concepts, despite not having prior knowledge. The interface 
                            is simple and well-designed. I'd suggest this app to anyone who wants a 
                            stress-free way to learn computing.
                        </p>
                    </div>
                
                </div>
            </div> 
        </div>

        <?php include "importFiles/returnButton.php" ?>

        <?php include "importFiles/footer.php" ?>

    </div>
    
</body>

</html>