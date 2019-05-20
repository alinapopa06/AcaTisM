<!-- <!DOCTYPE html> -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academic Thesis Manager</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/css.css">
  </head>
  <body>
          <nav class="antet">   
            
            <img id="fii" src="<?php echo BASE_URL; ?>static/images/fii.png" alt="FII">
                
            <div id="titlu">Academic Thesis Manager</div>

            <img id="univ" src="<?php echo BASE_URL; ?>static/images/UNIV1.png" alt="UNIV">
    </nav>


        
        <div class="container">
              <div id="name">Username</div>
              <input type="text" placeholder="Username">
          
              <div id="pass">Password</div>
              <input type="password" placeholder="Password">
          
              <button type="submit" onclick="window.location.href='acatism'">Login</button>

              <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
        </div>
    
  </body>
  </html>