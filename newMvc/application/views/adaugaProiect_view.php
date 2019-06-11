
<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/static/css/proiect.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etape</title>
  </head>
  <body>
   <nav class="menu">   
          <div id="siglafii">
            <img id="fii" src="<?php echo BASE_URL; ?>/static/images/fiialb.png" alt="fii">
          </div>
                 <a href="acatismprof.html" >Acasă</a>
                <a href="proiecte_profesori.html" >Proiecte</a>
                <a href="Etape_start.html" class="active" >Etape</a>
                <a href="Contact.html" >Contact</a>
                 <a href="html.html">Logout</a>
           <div id="siglauniv">
          <img id="univ" src="<?php echo BASE_URL; ?>/static/images/UNIV1.png" alt="universitate">
          </div>
    </nav>

    <?php
    require(APP_DIR .'models/addproject_model.php');
    if(isset($_POST['submit']))
    {
        $obj=new addproject_model();
        if($_POST['nume_proiect']!='' && $_POST['descriere']!='' && $_POST['tip_proiect']!='' && $_POST['sdescriere']!='')
        {
            $obj->insert($_SESSION['id_profesor'],$_POST['nume_proiect'],$_POST['descriere'],$_POST['sdescriere'],$_POST['tip_proiect']);
            header('Location: '. $config['base_url'] . 'proiecte');
        }
        else
        {
            echo "<script>alert('Campurile nu au fost completate corespunzator');</script>";
        }
    }
?>
       <div class="container">
  <form action="#" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname">Nume Proiect</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="nume_proiect" placeholder="Nume proiect..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Scurta prezentare</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="sdescriere" placeholder="Scurta descriere..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Tip Proiect</label>
    </div>
    <div class="col-75">
      <select  name="tip_proiect">
        <option value="licenta">licenta</option>
        <option value="master">master</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Descriere proiect</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="descriere" placeholder="Descriere.." style="height:180px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" name='submit' value="Submit">
  </div>
  </form>
  
</div>
    
  </body>
  </html>