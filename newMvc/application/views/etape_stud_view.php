<?php
$studInfo = $studInfo[0];
//print_r($etape);
//$etape = $etape[0];
if(count($proiecte)>0) {$proiecte = $proiecte[0];
     $etape_arr=$etape_arr[0]['descriere'];
$etape_arr=explode('.',$etape_arr);
}

?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/StefanStyle_studenti.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Etape</title>
</head>

<body>
  <nav class="menu">
    <div id="siglafii">
      <img id="fii" src="<?php echo BASE_URL; ?>static/images/fiialb.png" alt="fii">
    </div>
    <a href="acatism">Acasa</a>
    <a href="proiecte_studenti">Proiecte</a>
    <a href="Etape_studenti" class="active">Etape</a>
    <a href="Contact">Contact</a>
    <a href="<?php echo BASE_URL . "Logout"; ?>">Logout</a>
    <div id="siglauniv">
      <img id="univ" src="<?php echo BASE_URL; ?>static/images/UNIV1.png" alt="universitate">
    </div>
  </nav>
  <div class="content">
    <div class="jumbotron">
      <h1>Profilul meu: <?= $studInfo['nume_student'] ?> <?= $studInfo['prenume_student'] ?></h1>
      <p class="textdeco"><?= ucfirst($studInfo['tip']) ?></p>
      <p class="detalii"><span class="textdeco">An de studiu:</span> <?= $studInfo['an'] ?> </p>
      <p class="detalii"><span class="textdeco">Grupa:</span> <?=$studInfo['grupa']?></p>
      <?php
          if(count($proiecte)>0) 
          {
            echo '<p class="detalii"><span class="textdeco">Proiect:</span>' . $proiecte['nume_proiect'] . '</p>';
            
          }
          else
          echo '<p class="detalii"><span class="textdeco">Proiect:</span>Niciun proiect</p>';

          


        ?>
  

    </div>
  </div>
  <h1>Etapele mele</h1>  
  <div class="etape">
  <?php
//print_r($etape);
for($i=0;$i<count($etape);$i++){
  if($i%2==0)
  {
echo '
  <div class="row">
    <div class="column">
      <div class="Etapa1 '.$etape[$i]['status'].'">
       <h1> '.  $etape[$i]["nume_etapa"] .'</h1>
        <ol>';

       // $etape_arr=$etape_arr[0]['descriere'];
        $etape_arr=explode('.',$etape[$i]['descriere']);

           foreach($etape_arr as $descriere){
            echo '<li>' . $descriere . '</li>' ;
           }
        
     echo ' </ol>
      </div>
    </div>
    ';
  }
  else
  {
    echo '
    <div class="column">
    <div class="Etapa1 '.$etape[$i]['status'].'">
      <h1> '.  $etape[$i]["nume_etapa"] .'</h1>
      <ol>';

      // $etape_arr=$etape_arr[0]['descriere'];
       $etape_arr=explode('.',$etape[$i]['descriere']);

          foreach($etape_arr as $descriere){
           echo '<li>' . $descriere . '</li>' ;
          }
       
    echo ' </ol>
      </div>
    </div>
    </div>
    ';
  }
  
}
    ?>
  </div>
</div>
  <div class="container">
    <h1>Progresul proiectului</h1>
    <ul class="progressbar">
      <li class="active">Schitarea planulu</li>
      <li class="active">Documentare</li>
      <li class="working">Intocmirea planului</li>
      <li>Elaborarea initiala</li>
      <li>Elaborarea finala</li>
    </ul>
  </div>
  
</body>

