<?php
include 'functions.php';

$errors_name = "";
$errors_username ="";
$errors_email = "";
$errors_password = "";


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data...
    $name     = $_POST['name'];
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $phone    = $_POST['phone'];
    $gender   = $_POST['gender'];
    
    // Validate form data
    $errors_name     = ($name == '') ? 'Fullname must be 1-254 characters' : '';
    $errors_username = ($username == '') ? 'Username must be 1-254 characters' : '';

    $errors_email    = ($email == '') ? 'Please enter a valid email' : '';
    
    $errors_password = ($password == '') ? 'Passwords must be at least 8 characters and have:<br> 
                A lowercase letter<br>An uppercase letter<br>A number 
                <br>And a special character' : '';
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (name, username, email, password, birthday, phone_number, gender)
    VALUES ('$name', '$username', '$email', '$hashed_password', '$birthday', '$phone', '$gender')";
        $pdo->query($sql);
        redirect('home.php');
    
}
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="socialnet.css">
    <title></title>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">Socialnet</h1>
            <p id="description" class="description text-center">A community in pursuit of the good life</p>
        </header>

        <form action="signup.php" method="POST" class="survey-form">
            <div class="form-group">
                <input type="text" id="fullname" placeholder="Fullname" name="name" class="form-control" />
                <p><?= $errors_name ?></p>
            </div>
            <div class="form-group">
                <input type="text" id="username" placeholder="Username" name="username" class="form-control">
                <p><?= $errors_username ?></p>
            </div>
            <div class="form-group">
                <input type="email" id="email" placeholder="Email" name="email" class="form-control" />
                <p><?= $errors_email ?></p>
            </div>
            <div class="form-group">
                 <input type="password" id="password" placeholder="Password" name="password" class="form-control">
                 <p><?= $errors_password ?></p>
            </div>
            <div class="form-group">
            <input type="password" id="r-password" placeholder="Re-enter password" name="r-password" class="form-control">
            </div>
            <div class="form-group">
                <label id="birthday" for="birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday" class="form-control" />
            </div>
            <div class="form-group">
                <label for="phone number" id="phone">Phone Number</label>
                <input type="tel" id="phone" placeholder="Phone Number" name="phone" class="form-control"/>
            </div>
            <div class="form-group">
                <p>Gender</p>
                <label>
                    <input type="hidden" name="gender" value="">
                    <input type="radio" name="gender" value="Female" class="input-radio"/>Female
                </label>
                <label>
                    <input type="radio" name="gender" value="male" class="input-radio"/>Male
                </label>
            </div>
            <div class="form-group">
                <a href="home.php">
                <button type="submit" id="submit" name="signup" class="submit-button">
                Sign Up
                </button></a>
            </div>
            <div class="form-group">
                <p>By signing up, you agree to our <a href="#"><b>Terms.</b></a> Learn how we collect, use and share your data in our <a href="#"><b>Privacy Policy</b></a></p>
            </div>

            <div class="form-group">
                <p>Already have an account? <a href="#">Log in</a></p>
            </div>
        </form>
    </div>
<div id="footer" class="footer">
     <a class="foot">About us</a>
     <a class="foot">Support</a>
    <a class="foot">Privacy</a>
    <a class="foot">Terms</a>
    <a class="foot">&copy;2022 Socialnet</a>
</div>
</body>
</html>