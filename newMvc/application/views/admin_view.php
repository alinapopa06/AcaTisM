
<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etape</title>
  </head>
  <body>
   <nav class="menu">   
          <div id="siglafii">
            <img id="fii" src="<?php echo BASE_URL; ?>static/images/fiialb.png" alt="fii">
          </div>
                 <a class='active' href="<?php echo BASE_URL; ?>admin" >Adauga Utilizator</a>
                <a href="<?php echo BASE_URL; ?>admin" >Admin</a>
                 <a href="<?php echo BASE_URL; ?>logout">Logout</a>
           <div id="siglauniv">
            <img id="univ" src="<?php echo BASE_URL; ?>static/images/UNIV1.png" alt="universitate">
          </div>
    </nav>
    
    
    <div class='some-page-wrapper'>
     
      <div class='row'>
        <div class='column'>
           <div class="form-style-10">
        <h1>Adauga Student!<span>Adauga un nou utilizator student!</span></h1>
        <form action="#" method='POST'>
            <div class="section"><span>1</span>Detalii Student</div>
            <div class="inner-wrap">
                <label>Nume<input type="text" name="Nume" value="<?php if(isset($post['Nume'])) echo $post['Nume']?>" required/></label>
                <label>Prenume<input type="text" name="Prenume" value="<?php if(isset($post['Prenume'])) echo $post['Prenume']?>" required/></label>
                <label>Email<input type="email" name="email" value="<?php if(isset($post['email'])) echo $post['email']?>" required/></label>
                <label>An<input type="text" name="an" value="<?php if(isset($post['an'])) echo $post['an']?>" required/></label>
                <label>Grupa<input type="text" name="grupa" value="<?php if(isset($post['grupa'])) echo $post['grupa']?>" required /></label>
                <select name='tip' value="<?php if(isset($post['tip'])) echo $post['tip']?>">
                  <option >
                    licenta
                  </option>
                  <option>
                    master
                  </option>
                </select>
            </div>

            <div class="section"><span>2</span>Github</div>
            <div class="inner-wrap">
                
                <label>Git repository <input type="text" name="git_repos" value="<?php if(isset($post['git_repos'])) echo $post['git_repos']?>"/></label>
                <label>Git username <input type="text" name="git_username" value="<?php if(isset($post['git_username'])) echo $post['git_username']?>"/></label>
            </div>

            <div class="section"><span>3</span>Parola</div>
                <div class="inner-wrap">
                <label>Username <input type="text" name="username" value="<?php if(isset($post['username'])) echo $post['username']?>"required/></label>
                <label>Parola <input type="password" name="password" required/></label>
                <label>Confirma parola<input type="password" name="verifypass"required /></label>
            </div>
            <div class="button-section">
            <input type="submit" name="SignUpStud" />
           </div>
        </form>
    </div>
        </div>
        <div class='column'>
           <div class="form-style-10">
        <h1>Adauga Profesor!<span>Adauga un nou utilizator profesor!</span></h1>
        <form action="#" method='POST'>
            <div class="section"><span>1</span>Detalii Profesori</div>
            <div class="inner-wrap">
                <label>Nume<input type="text" name="Nume" value="<?php if(isset($post['Nume'])) echo $post['Nume']?>" required/></label>
                <label>Prenume<input type="text" name="Prenume" value="<?php if(isset($post['Prenume'])) echo $post['Prenume']?>" required/></label>
                <label>Email<input type="email" name="email" value="<?php if(isset($post['email'])) echo $post['email']?>" /></label>
            </div>



            <div class="section"><span>2</span>Parola</div>
                <div class="inner-wrap">
                <label>Username <input type="text" name="username" value="<?php if(isset($post['username'])) echo $post['username']?>" required/></label>
                <label>Password <input type="password" name="password" required/></label>
                <label>Confirm Password <input type="password" name="verifypass" required/></label>
            </div>
            <div class="button-section">
            <input type="submit" name="SignUpProf" />
           </div>
        </form>
    </div>
        </div>
      </div>
    </div>
  </body>
</html>