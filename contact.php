

<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
  <?php include('Prefabs/header.php');?>
  <link rel="stylesheet" href="DPfiles/dpLoginStyle.css">
    <link rel="stylesheet" href="DPfiles/dpStyle.css" />
    </head>
  
  <body>
    <div class="loginpage">


     <div class="modal-content animate">
     <!---form class="modal-content animate" action="/comingsoon.html"--->
       <div id="username" class="container" style="background-color:#f1f1f1"><div>Request to create an account in the form below. You will recieve an email once we get your account set up. Already have an account? <a href="login.html"> Login</a>.</div> </div>

    <div class="container">

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Your Name" name="name" id="name" required>

      <label for="Email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="Email" id="Email" required>

      <label for="subject"><b>Subject</b></label>
      <input type="text" placeholder="Enter Subject" name="subject" id="subject" required>

      <label for="message"><b>Message</b></label>
      <input type="text" placeholder="Message" name="message"  id="psw" required>
            <div class="container user">

            </div>

        <label>
        <input type="checkbox" checked="checked" name="remember" required> lol
      </label>
      <!--a href="comingsoon.html"--><button onclick="Signup()" >Request Sign Up</button>

    </div>
     </div>

         <script type="text/javascript">
           function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }

             var user = document.getElementById('username');
         var pass = document.getElementById('pass');
          /*-- USER NAME AND PASS--> */
         guestUser="1";
         guestPass="1";

          guestUser2="bshstsa";
          guestPass2="2023";

         function login(){
           if (user.value == guestUser){
             if (pass.value == guestPass){
             window.location.href = "loggedin.html";
           }
           }
             else if (user.value == guestUser2) {
               if (pass.value == guestPass2){
             window.location.href = "loggedin.html";
           }
           }
             else{
               alert("Please try again. Your username or password was incorrect.");
             }
         }



        const menuBtn = document.querySelector(".menu-btn");
        const navigation = document.querySelector(".navigation");

        menuBtn.addEventListener("click", () => {
          menuBtn.classList.toggle("active");
          navigation.classList.toggle("active");
        });
         </script>

      </body>
  </body>
  <?php include('Prefabs/footer.php');?>
</html>