<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/proiecte_studenti.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proiecte</title>
  </head>
  <body>
    <nav class="menu">   
             <img id="fii" src="<?php echo BASE_URL; ?>static/images/fiialb.png" alt="fii"> 
            <a href="acatism" >Acasă</a>
            <a href="#" class="active">Proiecte</a>
            <a href="Etape_studenti"  >Etape</a>
            <a href="Contact" >Contact</a>
            <a href="html"  >Logout</a>
            <img id="univ" src="<?php echo BASE_URL; ?>static/images/UNIV1.png" alt="univ">
    </nav>

    <aside class="asi">
            <h2>Alegerea proiectului</h2>
            <p>Alegeti profesorul</p>
            <select class="drop">
                <option value="Andrei Panu">Andrei Panu</option>
                <option value="Lenuta Alboaie">Lenuța Alboaie</option>
            </select>
            <form action="proiecte_studenti1"><button>Alegeti</button></form>
        
                <h2>Propuneri</h2>
                        <p> Aici veți putea să vă scrieți propriile idei de proiecte, incluzând o descriere a acestora.</p>
						
                          <p class="tit">Titlul proiectului:</p>
                          <input type="text"><br>
                          <p class="tit">Descrierea proiectului:</p>
                          <textarea id="text">
                            </textarea> <br>
                         <form action="proiecte_studenti5.html"><button>Trimiteti</button></form>
                        
              
        </aside>
  <main>
        <div class="content">
            
            <h1>Profesori</h1>
                <div id="listing">

                          <h2>Andrei Panu</h2>
                    <div class="title">
                        Academic Thesis Manager
                    </div>
                    <div class="continut">
                           
 Să se realizeze o aplicație Web privind managementul tezelor de licență/master la nivelul unei facultăți. Din punctul de vedere al profesorului, sistemul va oferi posibilitatea gestionării temelor propuse și a studenților arondati, inclusiv crearea unei planificări a celor mai importante etape până la momentul susținerii. Pentru studenți, aplicația va fi capabilă să listeze/filtreze subiectele de interes pentru fiecare profesor în parte și să permită înscrierea unei persoane în vederea îndrumării, eventual conform unor cerințe prelabile. Sistemul va verifică îndeplinirea acestor cerințe, inclusiv va notifica -- via un flux Atom sau prin e-mail -- profesorul/studentul atunci când survin întârzieri în efectuarea unor activități (e.g., transmiterea unui raport preliminar) sau dacă apar actualizări -- de pildă, profesorul a plasat o lista de lecturi recomandate. De asemenea, aplicația va semnala posibile probleme privind variantele intermediare ale documentelor întocmite de student referitoare la format sau standarde de redactare. Progresul implementării tezei va putea fi monitorizat automat prin intermermediul unui sistem online de management de cod-sursă precum Github.



                    </div>
                       
                    <div class="title">
                        Web App Security Alerter
                    </div>
                    <div class="continut">
                                Folosind datele publice referitoare la incidente de securitate -- preluate, de exemplu, de la Web Application Exploits -- să se realizeze un sistem capabil să trimită alerte în timp-real despre noile vulnerabilități software pentru o clasa de aplicații (e.g., CMS, framework, modul, biblioteca etc.). Suplimentar, aplicația va oferi pe baza unui API respectând paradigmă REST diverse soluții -- precum sfaturi, rapoarte tehnice, ghiduri de programare defensivă, articole și altele -- vizând prevenirea și/sau eradicarea acestor incidente de securitate. Informațiile oferite vor fi disponibile în formate că HTML, JSON și Atom. Bonus: recurgerea la un model și implementare publish/subscribe.



                    </div>   
                    <div class="title">
                            Crisis Containment Service
                    </div>
                    <div class="continut">

                            Să se dezvolte o platforma Web care permite gestionarea situațiilor de urgență (e.g., cutremure, incendii, inundații etc.) de către autorități sau organizații de profil. Aplicația va putea integra Google Crisis Map și Fusion Tables pentru crearea de straturi suplimentare cu scopul furnizării informațiilor de interes vizând evenimentele petrecute și zonele afectate. Suplimentar, se va recurge la utilizarea CAP (Common Alerting Protocol) pentru transmiterea de notificări și alerte populației (afectate direct sau în vecinătate); eventual, se pot folosi și diverse platforme sociale. Utilizând Geolocation API și servicii precum Google Person Finder, sistemul poate furniza automat informații de interes pentru găsirea unei persoane dispărute (e.g. atunci când această este inconștiență ori rănită) și/sau legate de eventualele adăposturi și rute de salvare. Bonus: recurgerea la microservicii Web.s


                    </div> 
                    <div class="title">
                            HTTPcafe
                    </div>
                    <div class="continut">

                                Să se implementeze o aplicație Web care simulează o cafenea destinată în special studenților informaticieni. Interacțiunea cu "clienții" se va realiza din pagini Web publice găzduite pe un anumit server Web, pe baza cîmpului 'Referer' din antetul unui mesaj HTTP. Aplicația trebuie să pună la dispoziția "clienților" o serie de resurse identificate via URI precum '/intrare', '/meniu', '/prefer/cafea', '/comandă/suc', '/comandă/zacuscă', '/notă', '/ieșire' etc. (dați frâu liber imaginației). Deși identificarea clientului se va face pe baza contului din URL-ul oferit de Referer, trebuie menținut un nivel minimal contabil și informativ: ce produse sunt în stoc și la ce preț, cine și ce a comandat, care e valoarea totală a notei de plata, la ce ora s-a înregistrat o comandă, cine mai era atunci în cafenea etc. Resursele sunt disponibile în cantități finite, eventual ajustabile dinamic. "Filmul" ocupării cafenelei va putea fi expus, în mod dinamic, că document HTML, că date JSON și că flux de știri Atom. De asemenea, "barman"-ul trebuie să răspundă clienților în mod "politicos HTTP" -- exemplu: dacă se recurge la 'GET /comandă/alcool', se va întoarce codul 403 Forbidden. 


                        </div>
                    <div class="title">
                            Kid Monitor
                    </div>
                    <div class="continut">

                                Să se implementeze un sistem Web de monitorizare în timp real a unui copil sau grup de copii, eventual pe baza unui senzor (de tip beacon) sau dispozitiv (ce poate fi emulat prin software cu ajutorul unui API REST). Se vor oferi în timp real atât locația copilului pe o harta convenabil aleasă (e.g., la nivel de apartament, clădire, stradă, cartier), cât și notificări dacă se distanțează la mai mult de M metri de un punct ori mulțime de puncte de interes sau de coordonatele actuale ale unei persoane: părinte, rudă, tutore, altcineva de încredere. Suplimentar, se vor realiza notificări pe baza unui serviciu Web privind posibile accidente precum coliziuni cu obiecte/autovehicule, izbituri la sol, contact cu animale posibil periculoase etc. De asemenea, se va oferi o interfață de administrare a copiilor monitorizați, inclusiv posibilitatea de a află cu ce alți copii interacționează o anumită odrasla. Bonus: adoptarea de microservicii Web.


                        </div>
                        <h2>Lenuţa Alboaie</h2>

                        <div class="title">
                                Collaborative Notepad 
                        </div>
                        <div class="continut">
                                        Să se realizeze o aplicație client/server ce permite editarea simultană a fișierelor text. Un fișier va putea fi editat în același timp de maxim doi clienți. Serverul va permite însă mai multe astfel de sesiuni concurente de editare pe documente diferite (ex. 2 perechi de câte 2 clienți pe 2 documente). Serverul va stoca fișierele, punând la dispoziția clienților operațiile de creare și download. Aplicația va trebui să implementeze un protocol de comunicare pentru operarea concurență asupra fișierelor. Se va avea în vedere consistentă documentului editat la modificări simultane asupra unei părți comune (ex. plasarea cursorului celor doi clienți când unul scrie și celălalt șterge în aceeași poziție).
                                </div>
                        <div class="title">
                                Froxy
                        </div>
                        <div class="continut">

                                        Să se implementeze o aplicație 'proxy' pentru protocolul FTP. Aplicația va include atât o componentă server (proxy-ul în sine) cât și o componentă client. Serverul (proxy-ul) va juca rol de client FTP pentru un alt server FTP de la care va prelua și stoca temporar fișiere. Dimensiunea maximă și tipurile fișierelor stocate temporar de acest proxy se vor specifică într-un fișier de configurare. Acest fișier va mai conține și o lista de situri interzise, pe baza unor politici de interzicere a accesului la ele (e.g., interzicerea accesului la siturile FTP din domeniul .uaic.ro între orele 08-20, în zilele de luni-vineri, pentru clienți provenind din domeniul .y.ro). Componentă client oferă unui utilizator obișnuit posibilitatea de download a fișierelor stocate pe proxy și în plus, unui administrator, posibilitatea de a modifică fișierul de configurare.


                                </div>
                        <div class="title">
                                IoT Simulator
                        </div>
                        <div class="continut">

                                        Implementați un client cu o interfață grafică atractivă care va juca rol de remote (telecomandă) pentru mai multe "dispozitive inteligente" (servere concurente). Clientul va putea alege cu ce dispozitive să se conecteze dintre cele disponibile (minim 3, cum ar fi bec, telecomanda TV, încă unul la alegere) și va fi capabil să schimbe starea (creșterea volumului, schimbarea canalului, etc). Aceste schimbări de stare vor putea fi vizibile atât în interfață cât și în starea serverului. 


                                </div>
            </div>

            <h1> Proiecte propuse de studenți </h1>
                    <ul>
                            <li class="parent">
                                    Clothes Shop Management System
                                        <div class="hover-content">
                                                Să se dezvolte o aplicație client/server care să ofere funcționalitatea unui magazin online de produse.
                                        </div>
                                </li>
                                <li class="parent">
                                        Garbage Management System
                                            <div class="hover-content">
                                                    Să se dezvolte o aplicație care să ofere funcționalitatea unui sistem de strângere a gunoaielor.
                                            </div>
                                    </li>
                    </ul> 
        </div>
           
        </main>
    </body>
</html>