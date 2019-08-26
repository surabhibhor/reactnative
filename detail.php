<?php
    //connection
    $db=mysqli_connect("localhost","root","","reg");
  if ($db->connect_error)
           {
             die("connection failed :" . $db->connect_error);
              }
                else
                    { 
                      //   echo"Conection ok";
                    }
        if(isset($_POST['submit']))
 {
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $cpassword=$_POST['cpassword'];
     $date=$_POST['date'];
     $address=$_POST['address'];
     $mbnumber=$_POST['mbnumber']; 
     $country=$_POST['country'];
     $gender=$_POST['gender'];
     $about=$_POST['about'];

    // $query="INSERT INTO()"


     header ('location:index.php');
 }     

     ?>