<?php 
include 'functions.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['email'] != "" || $_POST['password'] != "") {
       // Get form data...
       $email    = $_POST['email'];
       $password = $_POST['password'];  

       //Retrieve the user account information for the given username.
    $sql = "SELECT id, email, password FROM register WHERE email = :email";
    $query = $pdo->prepare($sql);
    $query->execute($email,$password);
            $row = $query->rowCount();
            $fetch = $query->fetch();
            if($row > 0) {
                echo"<center><h5 class='text-success'>Login successfully</h5></center>";
            } else{
                echo"<center><h5 class='text-danger'>Invalid username or password</h5></center>";
            }  
   }
}
?>
