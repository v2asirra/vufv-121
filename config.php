
<?php
header('location:login.php');
if (isset($_POST['fname'])){
    $db_hostname = '127.0.0.1';
    $db_username = "root";
    $db_password = "";
    $db_name = 'login';
    
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }


    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $Age=$_POST['Age'];
    $email=$_POST['email'];


    $sql = "INSERT INTO login (fname, lname, Age, email) VALUES ('$fname', '$lname', $Age,'$email')";


    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: ". mysqli_error($conn);
        exit;
    }

    echo "Registration successful";
    
    mysqli_close($conn);
}
?>