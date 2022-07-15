<?php
  session_start();
  date_default_timezone_set("Asia/Kuala_Lumpur");
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Create a about us"  />
        <meta name="keywords" 	 content="HTML, CSS" />
        <meta name="author"      content="Danish Faid Khoo" />
        <title>Contact Us</title>  
        <link href= "style2.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body class="background">
        <header class="header">
            <a href=index2.html><img class="logo" src="images/logo2.png" width="100" height="100" alt="3D.logo"></a>
            <nav>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop2.php">Shop</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus2.php":>Contact Us</a></li>
                    <li>
                    <?php 
                      if(!isset($_SESSION['user'])) { 
                        echo '<a id="signupBtn" onclick="loginPopup()">Login/Signup</a>'; 
                      } else {  
                        echo '<a onclick="logout()">Logout</a>'; 
                      } 
                    ?>
                    </li>
                </ul>
            </nav>
        </header>
        <br>
    <section id="contactusForm">
        <fieldset id="contactus">
            <legend><h2>Contact Us</h2></legend>
            <p><label>Name:</label>
                <input type="text" name="name" id="name" required pattern="[A-Za-z -]{1,25}" >
            <label class="right">Email:</label>
                <input type="email" name="email" id="email" required ></p>
            <p><label >Age:</label>
                <input type="text" name="Age" id="age"  >
            <label class="right" >Phone Number:</label>
                <input type="text" name="Phone Number" id="telno" required pattern="[0-9]{7}|[0-9]{10}" ></p>
            <p><label>Feedback:</label>
                <textarea id= "feedback" name="message" placeholder="Enter message" required rows="4" cols="100"></textarea>
            

        </fieldset>
        <div id="btnbody">
            <button onclick="submitContactUs()">Submit</button>  
        </div>
    </section>
            <footer>
                <section class="footer">
                <div class="social">
                    <a href="https://www.instagram.com/dankhootan/?hl=en"><i class="fab fa-instagram"></i></a>
                    <a href="https://open.spotify.com/artist/1yDlBpaRqLGiq3RsykXEhE?si=2-FpyAXQS5m5yUE5B4yVvA"><i class="fab fa-spotify"></i></a>
                    <a href="https://www.youtube.com/channel/UC6qp8SpuS4C71Oh2ddiOVhg?app=desktop"><i class="fab fa-youtube"></i></a>
                    
                </div>
            

                <p class="brandname"> 3DFitness @ 2022</p>
                <p class="brandname">19056928@imail.sunway.edu.my</p>
                <p class="brandname">+60193213030</p>
                <p class="brandname">Danish Faid Khoo</p>
                </section>
                
                
                
            
            </footer>

            <div id="id01" class="modal">
                <span onclick="document.getElementById('id01').style.display='none'"
              class="close" title="Close Modal">&times;</span>
              
                <!-- Modal Content -->
                <form class="modal-content animate" id="loginForm">
                  <div class="imgcontainer">
                    <img src="images/logo1.png" alt="Avatar" class="avatar">
                  </div>
              
                  <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" id="login-username" required>
              
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="login-password" required>
              
                    <button onclick="submitLogin()">Login</button>
                    <label>
                      <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                  </div>
              
                  <div class="container btnContainer" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button class="psw" onclick="toggleLoginSignup()">Signup</button>
                  </div>
                </form>
              
                <form class="modal-content animate hide" id="signupForm">
                  <div class="imgcontainer">
                    <img src="images/logo1.png" alt="Avatar" class="avatar">
                  </div>
              
                  <div class="container">
                    <label for="fname"><b>Full Name</b></label>
                    <input type="text" placeholder="Enter Full Name" name="fname" id="fname" required>
              
                    <label for="dob"><b>Date of Birth</b></label>
                    <input type="date" placeholder="xx-xxx-xxxx" name="dob" id= "Dob" required>
              
                    <label for="telno"><b>Phone Number</b></label>
                    <input type="text" placeholder="Phone Number" name="telno" id="phoneNumber" required>
              
                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="xxxx@gmail.com" name="email" id="email2" required>
              
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" id="username" required>
              
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Between 8-20 characters" name="psw" id="password" pattern="[A-Za-z0-9]{8,20}" required>
              
                    <button onclick="submitSignup()">Signup</button>
                  </div>
              
                  <div class="container btnContainer" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button class="psw" onclick="toggleLoginSignup()">Login</button>
                  </div>
                </form>
              </div>
        <script src="JS/main.js"></script>
    </body>
</html>
