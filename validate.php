
<html>
    <head>
       <style>
           
           body{
               background-image:url('img/music16.jpg');
           }   
        </style> 
    </head>
    <body>
        
    </body>
</html>


<?php

if(isset($_POST['submit'])){
    
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    
    
    $conn =mysqli_connect('localhost','root','','video');
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);
    $email = mysqli_real_escape_string($conn,$email);
    if(!$conn){
     die('server not connected');
    } 
    
    $query="select * from admin where username='{$username}' and password='{$password}' ";
     $r=mysqli_query($conn,$query);
    if($r){
        if(mysqli_num_rows($r)==1){
            
           
        include"index.php";
        }
        else{
            
 echo "<script type='text/javascript'>";
echo "alert(' Enter valid Username and Password')";
echo "</script>";
       include"Admin_login.php";
        }
       
    }
    
   
    else{
    
     die("error".mysqli_error($conn));
    }
    
}


?>