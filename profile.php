
<?php

session_start();
 
?>
<!doctype html>

<html>
<head>  
<link rel="stylesheet" href="style.css" type="text/css" />
        <meta charset=" utf-8">
        <meta name="viewport" content="device=-width, initial-scale=1.0">
    <title>profile</title>
    </head>
    <body>
    <header>
   
          <nav class="navbar">
          
  
              <ul>
                   <li><a href="home.php">Home</a></li>
                   <li><a href="signup.php">Signup</a></li>
                  <li>  <a href="logout.php">logout
    </a></li>

             </nav>
             <div class="logo">
                  <img src="image/1.png">
</div>
             
    </header> 
    
      <h1> welcome <?php echo $_SESSION['email']; ?></h1>
      <button><a href="cricket.html">Press the button for secret</button>
      
   


    </body>

    </html>

    
