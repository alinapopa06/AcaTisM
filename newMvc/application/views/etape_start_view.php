<?php
//print_r($arr[0][0]['id_student']);
//print_r($info);
//print_r($profProjects[2]['nume_proiect']);
?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/StefanStyle.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etape</title>
</head>

<body>
    <nav class="menu">
        <div id="siglafii">
            <img id="fii" src="<?php echo BASE_URL; ?>static/images/fiialb.png" alt="fii">
        </div>
        <a href="acatismprof.html">Acasă</a>
        <a href="proiecte_profesori.html">Proiecte</a>
        <a href="Etape_start.html" class="active">Etape</a>
        <a href="Contact.html">Contact</a>
        <a href="html.html">Logout</a>
        <div id="siglauniv">
            <img id="univ" src="<?php echo BASE_URL; ?>static/images/UNIV1.png" alt="univ">
        </div>
    </nav>
    <div class="content">
        <div class="jumbotron">
            <h1>Etapele Proiectelor</h1>
            <p>Mai jos sunt studentii arondati si etapele fiecarui proiect al acestora</p>



            <!--
        </div>


          <div class="grid-container">
          <div class="Student studentstyle">
            <div class="Nume">
                <p>Bolota Stefan</p>
            </div>
            <div class="Continut continutstyle">
                <ul>
                    <li><span class="textdeco">Tip proiect:</span> Licenta</li>
                    <li><span class="textdeco">Nume proiect:</span> Garbage Management System</li>
                    <li><span class="textdeco">Descriere:</span> Sa se dezvolte o aplicatie care sa ofere functionalitatea unui sistem de strangere a gunoaielor.</li>
                    <li class="morebtn"><a href="Etape.html" class="morebtn">Detalii etape...</a><li>
                </ul>
            </div>
          </div>
          <div class="Student1 studentstyle">
            <div class="Nume">
                 <p>Popa Alina</p>
            </div>
            <div class="Continut continutstyle">
                 <ul>
                    <li><span class="textdeco">Tip proiect:</span> Master</li>
                    <li><span class="textdeco">Nume proiect: </span> IoT Simulator</li>
                    <li><span class="textdeco">Descriere:</span> Implementati un client cu o interfata grafica atractiva care va juca rol de remote (telecomanda) pentru mai multe "dispozitive inteligente" (servere concurente).</li>
                    <li class="morebtn"><a href="Etape1.html" class="morebtn">Detalii etape...</a><li>
                </ul>
            </div>
          </div>
          <div class="Student2 studentstyle">
            <div class="Nume ">
                 <p>Dumitrescu Malina</p>
            </div>
            <div class="Continut continutstyle">
                 <ul>
                    <li><span class="textdeco">Tip proiect:</span> Master</li>
                    <li><span class="textdeco">Nume proiect: </span> Clothes Shop Management System</li>
                    <li><span class="textdeco">Descriere:</span> Sa se dezvolte o aplicatie client/server care sa ofere functionalitatea unui magazin online de produse </li>
                    <li class="morebtn"><a href="Etape2.html" class="morebtn">Detalii etape...</a><li>
                </ul>
            </div>
          </div>
          <div class="Student3 studentstyle">
            <div class="Nume ">
                 <p>Cristea Rares</p>
            </div>
            <div class="Continut continutstyle">
                 <ul>
                    <li><span class="textdeco">Tip proiect:</span> Licenta</li>
                    <li><span class="textdeco">Nume proiect: </span> Academic Thesis Manager</li>
                    <li><span class="textdeco">Descriere:</span>Sa se realizeze o aplicatie Web privind managementul tezelor de licenta/master la nivelul unei facultati.</li>
                    <li class="morebtn"><a href="Etape3.html" class="morebtn">Detalii etape...</a><li>
                </ul>
            </div>
          </div>
          --->
        </div>
        <div class="etape">
            <?php

            for ($i = 0; $i < count($arr); $i++) {
                if ($i % 2 == 0) {
                    //print_r($arr[$i][0]['id_proiect']);
                    echo '
                        <div class="row">
                            <div class="column">
                             <div class="card">
                              <h1> ' .  $arr[$i][0]['nume_student'] . ' ' . $arr[$i][0]["prenume_student"]  . '</h1>
                                 <ol>';
                    echo '<li> <span class="textdeco">Tip proiect:</span>' .$arr[$i][0]['tip'] . '</li>';

                  echo ' <li><span class="textdeco">Nume proiect: </span> ' . $projects[$i][0]['nume_proiect']. '</li>';
                   echo ' <li><span class="textdeco">Descriere:</span>' .  $projects[$i][0]['mini_descriere'].  '</li>';
                  echo ' <li><a href="Etape_start/student/'.$arr[$i][0]['id_student']. ' ">Detalii etape...</a><li>';



                    echo ' </ol>
                             </div>
                            </div>
                            ';
        }
                 else {
                    echo '
                         <div class="column">
                         <div class="card">
                         <h1> ' .  $arr[$i][0]['nume_student'] . ' ' . $arr[$i][0]["prenume_student"]  . '</h1>
                         <ol>';
                         echo '<li> <span class="textdeco">Tip proiect:</span>' .$arr[$i][0]['tip'] . '</li>';
                         echo ' <li><span class="textdeco">Nume proiect: </span> ' . $projects[$i][0]['nume_proiect']. '</li>';
                         echo ' <li><span class="textdeco">Descriere:</span>' .  $projects[$i][0]['mini_descriere'].  '</li>';

                         echo ' <li ><a href="Etape_start/student/'.$arr[$i][0]['id_student']. ' ">Detalii etape...</a><li>';


                         echo ' </ol>
                             </div>
                         </div>
                        </div>
                            ';
                }
            }


            ?>

                </body>

                </html>
