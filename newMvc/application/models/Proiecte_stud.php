<?php
include APP_DIR.'class/profesor.php';
class Proiecte_stud extends Model {

   public function getAllProfesor()
   {
       $profesori=array();
        $result = $this->query('SELECT id_profesor,nume,prenume FROM profesori');
        for ($i=0; $i < count($result); $i++) { 
            $prof= new Profesor();
            $prof->setNume($result[$i]['nume'],$result[$i]['prenume']);
            $prof->setId($result[$i]['id_profesor']);
            $id=$result[$i]['id_profesor'];
            $id = $this->escapeString($id);
            $projects= $this->query('SELECT * FROM proiecte WHERE  id_profesor="'. $id .'"');
            $prof->setProjects($projects);
            array_push($profesori,$prof);
        }
    return $profesori;
   }
   public function getProf($nume_prof)
   {
    $profesor=null;
    //Impart numele dat ca parametru dupa . in nume si prenume
    $name_arr=explode('.',$nume_prof);
    if(count($name_arr)==2)
    {
        $nume=$name_arr[0];
        $prenume=$name_arr[1];
        $result = $this->query('SELECT id_profesor FROM profesori WHERE lower(NUME)="'.$nume.'"AND lower(prenume)="'.$prenume.'"');
        //caut id-ul profesorului dat
        if($result!=null)
            {   
                //caut proiectele profesorului
                $id= $result[0]['id_profesor'];
                $id = $this->escapeString($id);
                $projects= $this->query('SELECT * FROM proiecte WHERE  id_profesor='. $id);
                
                $profesor=new Profesor();
                $profesor->setNume(strtoupper($nume),strtoupper($prenume));
                $profesor->setProjects($projects);
                return $profesor;
            }
        }
    }
   public function getProjects($id)
   {
       $id = $this->escapeString($id);
       $projects= $this->query('SELECT * FROM proiecte WHERE  id_profesor='. $id);
       return $projects;
   }
}


?>