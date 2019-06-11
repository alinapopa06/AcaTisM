<?php
include APP_DIR.'class/cereri.php';
class Proiecte_model extends Model {
    public function getCerere($id_stud,$id_profesor)
    {
     $proiect=$this->escapeString($id_profesor);
     $student=$this->escapeString($id_stud);
     $sql="SELECT nume_student,prenume_student from studenti where id_student=".$student;
     $result=$this->query($sql);
     $cerere=new Cerere();
     $cerere->setNume($result[0]['nume_student'],$result[0]['prenume_student']);
     $sql="SELECT nume_proiect,tip_proiect from proiecte where id_proiect=".$proiect;
     $result=$this->query($sql);
     $cerere->setProject($result);
     return $cerere;
    }
   public function getCereri()
   {
       $id=$_SESSION['id_profesor'];
       $id=$this->escapeString($id);
       $sql="SELECT id_student, id_proiect From cereri where id_profesor=".$id;
       //selectam toate cererile(studenti si profesor) id;
       $result=$this->query($sql);
       $cereri=array();
       for ($i=0; $i <count($result) ; $i++) 
       {
            $proiect=$result[$i]['id_proiect'];
            $student=$result[$i]['id_student'];
            $cerere=$this->getCerere($student,$proiect);
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
   
}
?>