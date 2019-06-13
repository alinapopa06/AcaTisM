<?php

class Admin_model extends Model {
    
    function addUtilizator($username,$parola,$tip)
    {
        $username=$this->escapeString($username);
        $parola=$this->escapeString($parola);
        $tip=$this->escapeString($tip);
        $sql="SELECT MAX(ID) FROM utilizatori";
        $max=$this->query($sql);
        $nr=$max[0][0]+1;
        $parola=password_hash($parola,PASSWORD_DEFAULT);
        $sql="INSERT INTO `utilizatori`(`id`, `nume_utilizator`, `parola`, `tip_utilizator`) 
        VALUES ('$nr','$username','$parola','$tip')";
        $this->execute($sql);
        return $nr;
    }
    function insertProf($username,$parola,$tip,$nume,$prenume,$email)
    {
        $id=$this->addUtilizator($username,$parola,$tip);
        $id=$this->escapeString($id);
        $sql="INSERT INTO `profesori`(`id_profesor`, `nume`, `prenume`, `email`) VALUES ('$id','$nume','$prenume','$email')";
        $this->execute($sql);
    }
    function insertStud($username,$parola,$tip,$nume,$prenume,$email,$an,$grupa,$tip_s, $repo, $git)
    {
        $username=$this->escapeString($username);
        $parola=$this->escapeString($parola);
        $tip=$this->escapeString($tip);
        $nume=$this->escapeString($nume);
        $prenume=$this->escapeString($prenume);
        $email=$this->escapeString($email);
        $an=$this->escapeString($an);
        $grupa=$this->escapeString($grupa);
        $tip_s=$this->escapeString($tip_s);
        $repo=$this->escapeString($repo);
        $git=$this->escapeString($git);
        $id=$this->addUtilizator($username,$parola,$tip);
        $id=$this->escapeString($id);
        $sql="INSERT INTO `studenti`(`id_student`, `id_proiect`, `nume_student`, `prenume_student`, `git_repos`, `git_username`, `email`, `an`, `grupa`, `tip`) 
        VALUES ('$id','','$nume','$prenume','$repo','$git','$email','$an','$grupa','$tip_s')";
         $this->execute($sql);
    }
}


?>