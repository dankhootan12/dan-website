<?php
  session_start();
  date_default_timezone_set("Asia/Kuala_Lumpur");
?>

<!DOCTYPE html>
    <html lang='en'>
    <head >   
        <meta charset="utf-8" />
        <meta name="description" content="Create a about us"  />
        <meta name="keywords" 	 content="HTML, CSS" />
        <meta name="author"      content="Danish Faid Khoo" />
    <title>Dan's Website</title>    
    <link href= "style2.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class= "background">
        <header class="header">
            <a href=index2.html><img class="logo" src="images/logo2.png" width="100" height="100" alt="3D.logo"></a>
            <nav>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop2.php">Shop</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactUs2.php":>Contact Us</a></li>
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
        <section id="intro">
            <h1>
                <p id="who">Who Are We?</p>
            </h1> 
            <img id="ironbull" src="images/588b3c74-0829-4802-83c8-53587b066f09.jpg" height="600" width="600"/>
            <h2 id="h2aboutus">
                History
            </h2>
           
                <aside class="aside">
                    <p class="topic-desc">          
                        At a tender age of 18 years old, not only was my heart broken, I was broke. 
                        Realising that I needed to make a change for myself, I decided to work on myself; 
                        physically, mentally and spiritually. 
                        I found my new love and calling in life at the gym. I wanted everyone to experience the happiness and passion I've discovered
                        . Instead of girls,money and drugs im more
                        of gym, protein and gains. I turned the pain into gain. 
                        That is the story behind 3D fitness.
                        
                    </p> 
                </aside>
                <img id="pic" src="images/8c2cef81-2994-4cdd-9d60-136dec7984b1-removebg-preview.png" height="750" width="700"/>
                <h2 id="h3aboutus">
                    What Does 3D Fitness Offer?
                </h2>
                    <aside class="aside2">
                        <p class="topic-desc2">          
                            Here at 3D Fitness, we offer a wide range of goods and services. For services we provide custom made fitness plans for customers to reach their. This includes diet plans
                            workout plans speciafically tailored for each individual.
                            <p class="topic-desc2">
                                3D Fitness also provide your daily suppliments such as whey protein powder, creatine  and mass gainer. All of 3D Fitness products are FDA certified and safe for consumption.
                            </p>
                            <p class="topic-desc2">
                                Finally 3D Fitness supplies gym equipment for all range of consumers. From a beginner to expert level all equipment are high quality products which will help you reach your goal.
            
                            </p>
                        </p> 
                    </aside>    
      
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
    