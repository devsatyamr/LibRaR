<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
   <nav>
     <h1 class="logo">LibManage</h1>
     
     <ul>
       <li><a href="index.html" target="_blank">Home</a></li>
       <li><a href="books.html" target="_blank">Books</a></li>
       <li><a href="aboutus.html" target="_blank">About us</a></li>
     </ul>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    

       <button class="openbtn" onclick="openNav()">&#9776;</button>
       <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="login.php" target="_blank">Log In</a>
        <a href="signup.html" target="_blank">Sign Up</a>
        
        
      </div>
     <script>
        function openNav() {
          document.getElementById("mySidebar").style.width = "200px";
          document.getElementById("main").style.marginLeft = "100px";
        }
                        
        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
    </script>
       
     
   </nav>
</header>
<div class="back">
  <body style="background-image:url('—Pngtree—solid color matte background blue_923718.png');">
    <section>
        <div class ="form-box">
            <form method="post" action="login.php">
               <center><h2 style="color: black;">Login</h2></center> 
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" required name="email">
                    <label for="">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required name="password">
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <label for=""><a href="forgot.html">Forgot Password?</a></label>
                    <label for=""></label>
                </div>
                <center><button4 name ="login_Btn">Log In</center>
                <div class="register">
                    <p>Don't have an account?<a href="signup.html" target="_blank">Sign Up</a></p>
                </div>
            </form>
        </div>
    </section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</div>
<div id="footer">
     <div style="margin-left:135px;"><a href="www.facebook.com" target="_blank"><img src="icons8-facebook-30.png"></img></a></div>
     <div style="margin-left:50px;"><a href="www.linkedin.com" target="_blank"><img src="icons8-linkedin-circled-50.png" style="width: 30px;"></img></a></div>
     <div style="margin-left:50px;"><a href="www.twitter.com" target="_blank"><img src="icons8-twitter-30.png"></img></a></div>
      
     
</div><hr>
<div class="copyr">
  <center><p>©Team X-acker</p></center>
</div>
</html>



