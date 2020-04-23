<?php
$host ="localhost";
$user="root";
$password="";
$db="demo";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    
    $sql = "select * from loginform where user='".$uname."' AND Pass='".$password."'
    limit 1";
    $result= mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo "u have successfully logged in";
        exit();
        
    }
    else {
        echo "you have entered incorrect password";
        exit();
    }
}
?>



<html>
<head>
 <title> Login Form in HTML5 and CSS3</title>
 <link rel="stylesheet" a href="Css3/style2.css">
 <link rel="stylesheet" a href="Css3/style.css">
 <link rel="stylesheet" a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
img {
  border-radius: 50%;
}
        input[type=submit]{
            border-radius: 12px;
            background-color: #1E90FF;
            color: white;
        }
        
</style>
</head>
<body>
 <div class="container">
 <img src="https://i.pinimg.com/564x/d3/28/64/d32864ef49da3f23c9fd57109dc876e4.jpg" />
 <form method="$POST" action="#">
     <div>
  <input type="radio" name="login" value="doktor"> DOKTOR
  <input type="radio" name="login" value="pacient"> PACIENT
  <input type="radio" name="login" value="admin"> ADMIN
     </div>
 <div class="form-input">
     <i class="fa fa-user icon"></i>
 <input type="text" name="text" placeholder="Enter the User Name"/> 
 </div>
 <div class="form-input">
     <i class="fa fa-key icon"></i>
 <input type="password" name="password" placeholder="password"/>
 </div>
    
 <input type="submit" type="submit" value="LOGIN" class="btn-login" />
     </form>
 </div>
</body>
</html>