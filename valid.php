
<?php
if(isset($POST['email']));
session_start();


if (isset($_POST['submit'])){
    $db_hostname = '127.0.0.1';
    $db_username = "root";
    $db_password = "";
    $db_name = 'login';
    
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }


    $email=$_POST['email'];
 $sql = "SELECT * FROM login where email='$email' ";
  $result = mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    if ($num==1) {
         $_SESSION['email']=$email ;
        header('location:profile.php');
        
    } else{
        header('location:login.php');
    }}

    

