<?php
include APP_DIR.'class/cereri.php';
include APP_DIR.'class/propuneri.php';
class Proiecte_model extends Model {
    public function getCerere($id_stud,$id_profesor,$id_cerere)
    {
     $proiect=$this->escapeString($id_profesor);
     $student=$this->escapeString($id_stud);
     $sql="SELECT nume_student,prenume_student from studenti where id_student=".$student;
     $result=$this->query($sql);
     $cerere=new Cerere();
     $cerere->setNume($result[0]['nume_student'],$result[0]['prenume_student'],$id_cerere);
     $sql="SELECT nume_proiect,tip_proiect from proiecte where id_proiect=".$proiect;
     $result=$this->query($sql);
     $cerere->setProject($result);
     return $cerere;
    }
    public function getCereri()
    {
        $id=$_SESSION['id_profesor'];
        $id=$this->escapeString($id);
        $sql="SELECT id_cerere,id_student, id_proiect From cereri where id_profesor=".$id;
        //selectam toate cererile(studenti si profesor) id;
        $result=$this->query($sql);
        $cereri=array();
        for ($i=0; $i <count($result) ; $i++) 
        {
                $proiect=$result[$i]['id_proiect'];
                $student=$result[$i]['id_student'];
                $cerere=$this->getCerere($student,$proiect,$result[$i]['id_cerere']);
                array_push($cereri,$cerere);
            }
        return $cereri;
    }
    public function getProjects($id)
    {
        $id = $this->escapeString($id);
        $projects= $this->query('SELECT nume_proiect,mini_descriere FROM proiecte WHERE  id_profesor='. $id);
        return $projects;
    }
    public function getProfs()
    {
        $profesori=$this->query("SELECT nume,prenume FROM profesori");
        echo $profesori;
        return $profesori;
    }
    public function getPropuneri($id_profesor)
    {

        $id_profesor=$this->escapeString($id_profesor);
        $prop=$this->query("SELECT * FROM propuneri WHERE id_profesor=".$id_profesor);
        $result=array();
        for ($i=0; $i <count($prop) ; $i++) 
        { 
            $student=$this->query("SELECT nume_student, prenume_student from studenti where id_student=".$prop[$i]['id_student']);
            $propunere=new Propuneri();       
            $propunere->setPropunere($prop[$i]['nume_proiect'],$student[0]['nume_student'].$student[0]['prenume_student'],$prop[$i]['descriere'],$prop[$i]['id_propunere']);
            array_push($result,$propunere);
        }
        return $result;
    }
    public function stergePropunere($id)
    {
        $id=$this->escapeString($id);
        $this->execute("DELETE FROM propuneri WHERE id_propunere=".$id);

    }
    public function insertProiect($propunere)
    {
        $sql="INSERT INTO `proiecte`( `id_profesor`, `nume_proiect`, `descriere`, `mini_descriere`, `tip_proiect`) VALUES (".
        $propunere[0]['id_profesor'].",'".$propunere[0]['nume_proiect']."',' ','".$propunere[0]['descriere']."','".$propunere[0]['tip_proiect']."')";
        $this->execute($sql);
        $this->stergePropunere($propunere[0]['id_propunere']);
    }
    public function stergeCerere($id)
    {
        $id=$this->escapeString($id);
        $this->execute("DELETE FROM cereri WHERE id_cerere=".$id);
    }
    public function adaugaProiect($id_student,$id_proiect,$id_profesor)
    {
        try{
            $sql="insert into proiect_student values (".$id_proiect.','.$id_student.','.$id_profesor.')';
        echo $sql;
        $this->execute($sql);
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        $sql="UPDATE `studenti` SET `id_proiect`='$id_proiect' where id_student='$id_student'";
        $this->execute($sql);
    }
    public function getInfo($id_cerere)
    {
        $sql="SELECT * from cereri where id_cerere=".$id_cerere;
        $res=$this->query($sql);
        return $res;
    }
   
}
?>