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
                  <h1 id = "subtitle">Ace Training</h1>
                  <a href="index.php">Home</a>
                  <a href="news.php">News</a>
                  <a href="reviews.php">Reviews</a>
                  <h1 id = "subtitle">Get Started!</h1>
                  <a href="login.php">Login</a>
                  <a href="register.php">Register</a>
                  <h1 id = "subtitle">Find Out More</h1>
                  <a href="about.php">About us</a>
                  <a href="contact.php">Contact us</a>
                </div>
            </div><img src="images/logo.png" class ="logo" width="75" height="65">
            <ul>
                <li class="links">
                    <a href="index.php" class="indexNav">Home</a>
                </li>
                <li class="links">
                    <a href="login.php" class="loginNav">Login</a>
                </li>
                <li class="links">
                    <a href="register.php" class="registerNav">Register</a>
                </li>
                <li class="links">
                    <a href="about.php" class="aboutNav">About</a>
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