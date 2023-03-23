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
            <span class="details">Parent Name</span>
            <input type="text" name="pname" placeholder="full name" required>
          </div>
          <div class="input-box">
            <span class="details">Mobile Number</span>
            <input type="text" name="pmobile" placeholder="Number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Address" required>
          </div>
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
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pass" placeholder="Password" required>
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
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
