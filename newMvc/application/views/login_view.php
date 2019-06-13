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
              <form method="post" action>  
              <input type="text" name="name" placeholder="Username">
              <div id="pass">Parola</div>
              <input type="password" name="password" placeholder="Parola">
              <div id="psdwr" class="hidden" >Parola gresita</div> 
              <div id="usrwr" class="hidden" >Username-ul nu exista</div> 
  
          
              <button type="submit" name="submit">Login</button>
              
              </form>
        </div>
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
          header("Location:".BASE_URL."admin");
        }

          else if($rez['tip_utilizator']==2)
          {
            
            $sql="Select id from utilizatori where nume_utilizator='".$_POST["name"]."'" . "and tip_utilizator=2";
            $user=$model->query($sql);
            $_SESSION['id_profesor']=$user[0]['id'];
            header("Location:".BASE_URL."Acatismprof");
          }

          else  if($rez['tip_utilizator']==3)
          {
            $sql="Select id from utilizatori where nume_utilizator='".$_POST["name"]."'" . "and tip_utilizator=3";
            $user=$model->query($sql);
            $_SESSION['id_student']=$user[0]['id'];
            header("Location:".BASE_URL."Acatism");
          }
        else if($rez==-1)
          {
            echo "<script type='text/javascript'>
            function error(){
              var number=document.getElementById('psdwr');
              number.classList.remove('hidden');
              number.classList.add('nou');
            }
            error();
            
            </script>";
          }
          else if($rez==-2)
          {
            echo "<script type='text/javascript'>
            function error(){
              var number=document.getElementById('usrwr');
              number.classList.remove('hidden');
              number.classList.add('nou');
            }
            error();
            
            </script>";
          }
      }

  }

   
?>
  </body>
  </html>