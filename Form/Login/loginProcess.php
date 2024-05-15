
<?php
require ("config.php");
//menacari data
if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $pasword  = $_POST["pasword"];

    $result = mysqli_query($conn,"SELECT*FROM register WHERE username= '$username' and pasword='$pasword'");

    //cek username
    if(mysqli_num_rows($result)===1){

        //cek password
        $row = mysqli_fetch_assoc($result);
       if( password_verify($pasword, $row["pasword"])){
        header("Location:admin.php");
        exit;
       }
    }
    $error=true; 
}


?>