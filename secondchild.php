<?php

include "connect.php";
if(isset($_POST['submit'])){
  $pmobile = $_POST['pmobile'];
  $pass = $_POST['pass'];
  $pname = $_POST['pname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $sname = $_POST['sname'];
  $school = $_POST['school'];
  $rollno = $_POST['rollno'];
  $sclass = $_POST['sclass'];
  $saddr = $_POST['saddr'];
  $gender = $_POST['gender'];
  $run = mysqli_query($con,"insert into parent values ('$pmobile','$pass','$pname','$email','$address','$sname','$school','$rollno','$sclass','$saddr','$gender') ");
  if(isset($run)){
    echo " <script>alert('Data Entered Sucessfully')</script>";
    header("location:");
  }
}
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="hello.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
         
         
          
          
          <div class="input-box">
            <span class="details">Student Name</span>
            <input type="text" name="sname" placeholder="Student name" required>
          </div>

          <div class="input-box">
            <span class="details"> School Name</span>
            <input type="text" name="school" placeholder="School Name" required>
          </div>
          <div class="input-box">
            <span class="details">Roll No</span>
            <input type="text" name="rollno" placeholder="Roll No" required>
          </div>
          <div class="input-box">
            <span class="details">Student class</span>
            <input type="text" name="sclass" placeholder="Student class" required>
          </div>

          <div class="input-box">
            <span class="details">School Address</span>
            <input type="text" name="saddr" placeholder="School Address" required>
          </div>
          
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="1"  id="dot-1">
          <input type="radio" name="gender" value="2"  id="dot-2">
          <input type="radio" name="gender" value="0"  id="dot-3">
          <span class="gender-title"> Student Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
            </label>
            <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
            </label>
            <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Others</span>
            </label>
          </div>
        </div>
        <div class="button">
          <div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_LUzFSL4vDJemYo/view" data-text="Pay for Lunch Box" data-color="#F05151" data-size="large">
          <script>
            (function(){
              var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
              if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
              s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
              rzp && rzp.init && rzp.init()}})();
          </script>
        </div>   
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>  
      </form>
    </div>
  </div>
  <script>
   // Get the email input element
const emailInput = document.getElementById("email");

// Add an event listener for when the input value changes
emailInput.addEventListener("input", function() {
  // Get the input value and remove any leading/trailing whitespace
  const email = this.value.trim();

  // Check if the email input is not empty and matches a valid email format
  if (email !== "" && /^[^\s@]+@[^\s@]{1,7}\.[^\s@]{1,4}$/.test(email)) {
    // Set the input border color to green to indicate success
    this.style.borderColor = "green";
  } else {
    // Set the input border color to red to indicate error
    this.style.borderColor = "red";
  }
});

  </script>
</body>
</html>
