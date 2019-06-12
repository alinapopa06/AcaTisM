<!-- <!DOCTYPE html> -->
<?php
require APP_DIR .'models/Login_model.php';
//print_r($_POST);

if(isset($_POST['submit']))
{
  

  if(isset($_POST["name"]) && isset($_POST["password"]))
  {
    
       $model= new Login_model();
       $model->username=$_POST["name"];
       $model->password=$_POST["password"];
       $rez=$model->verificare();
       if($rez['tip_utilizator']==1)
       {

         $_SESSION['admin']=$rez;
         header("Location: http://localhost/Acatism/newMvc/Acatism");
       }

         else if($rez['tip_utilizator']==2)
         {
          
          $sql="Select id from utilizatori where nume_utilizator='".$_POST["name"]."'" . "and tip_utilizator=2";
          $user=$model->query($sql);
          $_SESSION['prof']=$user[0]['id'];
          header("Location: http://localhost/Acatism/newMvc/Acatismprof");
         }

        else  if($rez['tip_utilizator']==3)
         {
          $sql="Select id from utilizatori where nume_utilizator='".$_POST["name"]."'" . "and tip_utilizator=3";
          $user=$model->query($sql);
          $_SESSION['stud']=$user[0]['id'];
          header("Location: http://localhost/Acatism/newMvc/Acatism");
        }

       
       else
         {
         
          $message = "Username and/or Password incorrect.\\nTry again.";
          echo "<script type='text/javascript'>alert('.$message.');</script>";
           
         }
        }

  }

   
?>

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
              <form method="post" action>  
              <input type="text" name="name" placeholder="Username">
              <div id="pass">Password</div>
              <input type="password" name="password" placeholder="Password">
              
  
          
              <button type="submit" name="submit">Login</button>

              <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>

              
              </form>
        </div>
    
  </body>
  </html>