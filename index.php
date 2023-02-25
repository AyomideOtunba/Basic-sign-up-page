<?php
?>
	<head>
  <link rel="stylesheet" href="socialnet.css">
</head>
<body>
  <div class="container">
     <header class="header">
      <h1 id="title" class="text-center">Socialnet</h1>
       <p id="description" class="description text-center">A community in pursuit of the good life</p>
     </header>
     <form class="survey-form" method="post" action="login.php">
        <div class="form-group">
            <input type="text" 
              name="email"
              id="email"
              placeholder="Email"
              class="form-control" 
              />
        </div>
        <div class="form-group">
            <input type="text" 
              name="password"
              id="password"
              placeholder="Password"
              class="form-control" 
              />
        </div>
        <div class="form-group">
         <button type="submit" id="submit" name="login" class="submit-button">
             Log in         
        </button>
        </div>
        <div class="form-group">
         <p><a href="#">Forgotten Password</a></p>

         <div class="form-group">
         <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
     </form>
     <div id="footer" class="footer">
     <a class="foot">About us</a>
     <a class="foot">Support</a>
    <a class="foot">Privacy</a>
    <a class="foot">Terms</a>
    <a class="foot">&copy;2022 Socialnet</a>
</div>
  </div>
</body>
</html>