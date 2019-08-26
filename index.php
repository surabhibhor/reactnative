<?php
include 'detail.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="container">
  <form action="detail.php" method="POST">
  <h2>REGISTRATION</h2>
      <div class="input">
          <input type="text" name="fname" placeholder=" frist-name">
       </div>
       <div class="input">
           <input type="text" name="lname" placeholder=" last-name">
       </div>
       <div class="input">
           <input type="email" name="email" placeholder="Email">
       </div>
       <div class="input">
           <input type="password" name="password" placeholder="Password">
       </div>
        <div class="input">
            <input type="password" name="cpassword" placeholder="Confirm-Password">
        </div> 
        <h2>PERSONAL INFORMATION</h2>
        <div class="input">
            <input type="date" name="date" placeholder="Birth-date">
        </div>
        <div class="input">
            <textarea name="address" placeholder="Enter the address"></textarea>
        </div>
        <div class="input">
        <input type="number" name="mbnumber" placeholder="Mobile number">
        </div>
        <div class="dropdown">
             <select name="country">
                       <option value="india">IndiaI</option>
                       <option value="pakistan">Pakistan</option>
                       <option value="bangladesh">Bangladesh</option>
                       <option value="nepal">Nepal</option>
                       <option value="shrilanka">Shrilanka</option>
                       <option value="china">China</option>
             </select>          
        </div>
        <div class="input">
            <input type ="radio" name="gender" value="male">Male
            <input type ="radio" name="gender" value="female">Female
            <input type ="radio" name="gender" value="other">Other
         </div>
         <div class="input">
         <textarea name="about" placeholder="talk about you"></textarea>
         </div>
         <div>
         <input type="submit" name="submit" value="submit" class="button">
         </div>

    </div>

 </form>  
</body>
</html>