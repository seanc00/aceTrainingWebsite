<style>
.dropbtn {
  background-color: #00986f;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  transition: 300ms;
  border-radius: 20px;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #017154;
  transition: 300ms;

}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #017154;
  min-width: 160px;
  overflow: auto;
  z-index: 1;
  transition: 300ms;
  border-radius: 20px;

}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  transition: 500ms;
  border-radius: 20px;
}

.dropdown a:hover {
    background-color: #ddd; 
    color: #017154; 
    font-weight: bold; 
    font-size: 16px; 
    transition: 500ms;
    border: solid black 1px
}

.dropdown a:active {
    opacity: 0.7;
    transition: 100ms;
    background-color: #017154;
}

.show {
    display: block;
}

#subtitle {
    padding: 10px;
    text-decoration: underline;
    margin-top: 15px;
}
</style>

<nav class = "header">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><img src = "images/menu.png" width = "50px" height = "50px"></button>
                <div id="myDropdown" class="dropdown-content">
                    <h1 id = "subtitle">Learning Tools</h1>
                    <a href="StudentPage.php">Student home</a>
                    <a href="StudentQuiz.php">Quizzes</a>
                    <a href="StudentReading.php">Reading</a>
                    <a href="StudentResources.php">Resources</a>
                    <a href="LogMeOut.php">Logout</a>
                </div>
            </div><img src="images/logo.png" class ="logo" width="75" height="65">
            <ul>
                <li>
                  <p><?php echo 'Welcome back '.$firstname .' '. $lastname.' !' ?> &nbsp; <img src="images/avatar1.png" id="Avatar" style="width: 4%"></p>
                </li>
                <li>
                    <a href="LogMeOut.php" class="indexNav">Logout</a>
                </li>
            </ul>
        </nav>

        <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>