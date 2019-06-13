<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/proiecte_profesori.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proiecte</title>
  </head>
  <body>
    <nav class="menu">   
             <img id="fii" src="<?php echo BASE_URL; ?>static/images/fiialb.png" alt="fii"> 
            <a href="<?php echo BASE_URL; ?>acatismprof" >Acasă</a>
            <a href="#" class="active">Proiecte</a>
            <a href="<?php echo BASE_URL; ?>Etape_profesori"  >Etape</a>
            <a href="<?php echo BASE_URL; ?>contact_profesori" >Contact</a>
            <a href="<?php echo BASE_URL; ?>logout">Logout</a>
            <img id="univ" src="<?php echo BASE_URL; ?>static/images/UNIV1.png" alt="univ">
    </nav>


<div class="grid-container">
        <div class="grid1">
          <div class="nume1">
                <h1>Proiectele mele</h1>
          </div>
          <div class="continut1">
                <ol >
                        <?php
                        for ($i=0; $i <count($proiecte) ; $i++) { 
                            echo "<li class='parent'>".$proiecte[$i]['nume_proiect'].
                                "
                                <div class='hover-content'>".$proiecte[$i]['mini_descriere']."
                                
                                </div>
                             </li>";
                        }
                            
                        ?>
                
                    </ol>
          </div>
          <form action="#" method="POST"><button class='new' name="add">ADD</button></form>
        </div>
        <div class="grid2">
          <div class="nume2">
                <h1>Cereri</h1>
          </div>
          <div class="continut2">
                <ul>
                    <?php
                    if(isset($_POST['add']))
                    {
                        header("Location:".BASE_URL."AdaugaProiect");
                    }
                    if(isset($_POST['accepta']))
                    {
                        $model=new Proiecte_model();
                        $student=$model->getInfo($_POST['cerere']);
                        print_r($student);
                        $model->adaugaProiect($student[0]['id_student'],$student[0]['id_proiect'],$_SESSION['id_profesor']);
                        $model->stergeCerere($_POST['cerere']);
                        header("Location:".BASE_URL."proiecte");
                    }
                    if(isset($_POST['refuza']))
                    {
                        $model=new Proiecte_model();
                        $model->stergeCerere($_POST['cerere']);
                        header("Location:".BASE_URL."proiecte");
                    }
                        for ($i=0; $i <count($cereri) ; $i++) { 
                            echo "
                            <li class='parent'>".$cereri[$i]->prenume." ".$cereri[$i]->nume.
                            "<form action='#' method='Post'> 
                            <input type='submit' name='accepta' value='Accepta'>
                            <input type='submit' name='refuza' value='Refuza'>
                            <input type='hidden' name='cerere' value='".$cereri[$i]->id."'></form>
                                <div class='hover-content'>
                                <ul>
                                <li>Proiect:". $cereri[$i]->proiect[0]['nume_proiect']."</li>
                                <li>Tip Proiect:".$cereri[$i]->proiect[0]['tip_proiect']."</li>
                                </ul>
                                </div>
                                </li>
                            ";
                        }
                    ?>                         
                </ul>
          </div>
        </div>
        <div class="grid3">
          <div class="nume3">
              <h1>
                  Proiecte propuse
              </h1>
          </div>
          <div class="continut3">
                
                <ul>
                        <?php
                            
                            if(isset($_POST['acceptap']))
                            {
                                $model=new Proiecte_model();
                                $propunere=$model->query("SELECT * FROM propuneri where id_propunere=".$_POST['id_propunere']);
                                $model->insertProiect($propunere);
                                header("Location:".BASE_URL."proiecte");
                            }
                            if(isset($_POST['refuzap']))
                            {
                                $model=new Proiecte_model();
                                $model->stergePropunere($_POST['id_propunere']);
                                header("Location:".BASE_URL."proiecte");
                            }
                            for ($i=0; $i <count($propuneri) ; $i++) { 
                                echo "<li class='parent'>
                                " . $propuneri[$i]->titlu_proiect.
                                "<form action='#' method='POST'>
                                <input type='hidden' name='id_propunere' value='".$propuneri[$i]->id_propunere."'>
                                <button name='acceptap'>Accepta</button>
                                <button name='refuzap'>Refuza</button>
                                </form>
                                    <div class='hover-content'>
                                    <ul>
                                    <li>Nume:".$propuneri[$i]->nume_student."</li>
                                    <li>Descriere:".$propuneri[$i]->mini_descriere."</li></ul>
                                    </div>
                            </li>";
                            }
                        ?>
                        <!--<li class="parent">
                                Garbage Management System
                                <form action="https://webmail-studs.info.uaic.ro/"><button>Răspundeți</button></form>
                                    <div class="hover-content">
                                    <ul>
                                    <li>Nume:Bolotă Ștefan </li>
                                    <li>E-mail:stefan.bolota@info.uaic.com</li>
                                    <li>Să se dezvolte o aplicație care să ofere funcționalitatea unui sistem de strângere a gunoaielor.</li>
                                    </ul>
                                    </div>
                            </li>
                            <li class="parent">
                                Clothes Shop Management System
                                <form action="https://webmail-studs.info.uaic.ro/"><button>Răspundeți</button></form>
                                    <div class="hover-content">
                                        <ul>
                                            <li>Nume:Mălina Dumitrescu</li>
                                            <li>E-mail:malina.dumitrescu@info.uaic.com</li>
                                            <li>Să se dezvolte o aplicație client/server care să ofere funcționalitatea unui magazin online de produse.</li>
                                        </ul>
                                    </div>
                                    
                            </li>
                         -->   
                </ul>
          </div>
        </div>
      </div>
    </body>
    </html>