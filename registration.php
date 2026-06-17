<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Registration </title>
    <link rel ="stylesheet" href ="style.css">
</head>
<body>
    
<div class="container">
   <form action="" method ="POST" >
        <h3>User Registration Form</h3>
        <br>

        <label for="Name">Name </label>
        <input type = "text" name ="name" placeholder = "Enter your name" 
        maxlength="50"/>
        <br>

        <label for="dob">Date Of Birth </label>
        <input type="date" name="dob" id = "dob"/>
        <br>
        <div>
        <label for="gender">Gender </label>
        <input type="radio" name ="gender" value ="male">male</input>
        <input type="radio" name ="gender" value ="female">female</input>
        </div>
        <br>


        <label for="number">Phone </label>
        <input type="phone" name ="number" placeholder ="phone"
        maxlength="10"/>
        <br>

        <label for="Email">Email </label>
        <input type="email" name ="email" placeholder ="enter email"
        maxlength="70"/>
        <br>

    
        <!-- <label for="country">Country</label>

        <select name="country" id="country">
            <option value="">Select Country</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">United Kingdom</option>
            <option value="Canada">Canada</option>
            <option value="Australia">Australia</option>
        </select> -->
    
    
        <label for="country">Country </label>
        <input type="text" name="country" id="" maxlength="50">
        <br>

        <label for="state">State </label>
        <input type="text" name ="state" maxlength="50">
        <br>

        <label for="city">City </label>
        <input type="text" name="city" id="" maxlength="50" />
        <br>

        <label for="pin">Pin code </label>
        <input type="number" name ="pin"maxlength="6"/>
        <br>
        
        <button type ="submit" name="submit">Register</button>


    </form>


</div>


<?php


error_reporting(0);

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);





if(isset($_POST['submit'])){
  
     $name = $_POST['name'];
     "<br/>";
     $dob = $_POST['dob'];
     "<br/>";
     $gender = $_POST['gender'];
     "<br/>";
      $phone = $_POST['number'];
     "<br/>";
     $email =$_POST['email'];
     "<br/>";
     $country = $_POST['country'];
     "<br/>";
     $state = $_POST['state'];
     "<br/>";
      $city = $_POST['city'];
     "<br/>";
     $pin =$_POST['pin'];
     "<br/>";

}

// include "./db.php";

// $qry = $conn->prepare("INSERT INTO `registration`(`name`,`dob`,`gender`,`mail`,`phone`,`country`,`state`,`city`,`pincode`)
//                 VALUES('$name','$dob','$gender','$email','$phone','$country','$state','$city','$pin')");

//                 if($qry->execute()){
//                     echo "<br/>";
//                     echo "<h2 style='color:green;'>Registered Successfully</h2>";
//                 }
//                 else{
//                     echo "<br/>";
//                     echo "<h2 style='color:red;'>Failed insertion plz try again!</h2>";

//                 }   


include "./db.php";

$qry = $conn->prepare(
"INSERT INTO registration
(name,dob,gender,mail,phone,country,state,city,pincode)
VALUES (?,?,?,?,?,?,?,?,?)"
);

$qry->bind_param(
    "ssssssssi",
    $name,
    $dob,
    $gender,
    $email,
    $phone,
    $country,
    $state,
    $city,
    $pin
);

if($qry->execute()){
    echo "<br>";
    echo "<h2 style='color:black;'>Registered Successfully</h2>";
}
else{
    echo "<br>";
    echo "<h2 style='color:red;'>Failed insertion, please try again!</h2>";

    echo $qry->error;  
}

   
 


?>





</body>
</html>