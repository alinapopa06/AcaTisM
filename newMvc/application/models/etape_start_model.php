
<?php

class etape_start_model extends Model
{
    private $profID;
    private $projectID;

    public function setProf($profID){
        $this->profID = $profID;
    }


    public function getProfInfo(){
		$id=$this->escapeString($this->profID);
		$sql="Select * from profesori where id_profesor='".$id."'";
        $profInfo=$this->query($sql);
        
        return $profInfo;
    }

    public function getInfo(){
        return $this->profID;
    }

    public function getProjects()
    {
        $id=$this->escapeString($this->profID);
        $sql="Select * from proiecte where id_profesor='".$id."'";
        $profProjects=$this->query($sql);

        return $profProjects;
    }

    public function getStudents()
    {
        $id=$this->escapeString($this->profID);
        $sql="Select * from profesor_student where id_profesor='$id'";
        $ids=$this->query($sql);
        $count=count($ids);
         $arr=array();
        for($i=0;$i<$count;$i++)
        {
            $sql="Select * from studenti where id_student='".$ids[$i]['id_student']."'";
            $data=$this->query($sql);
            array_push($arr,$data);
        }

        return $arr;
    }

    public function getProject()
    {
        $id=$this->escapeString($this->projectID);
        $sql="Select * from proiecte where id_proiect='$id'";
        $info=$this->query(($sql));
       
        return $info;

    }

    public function getProjectName($id_student)
    {
        $sql="Select id_proiect from studenti where id_student='$id_student'";
        $iddd=$this->query(($sql));
        return $iddd;

    }
    public function getProjectInfo($studenti)
    {
        $rezultat=array();
        for ($i=0; $i < count($studenti); $i++) { 
            $sql="SELECT nume_proiect, mini_descriere From proiecte where id_proiect=".$studenti[$i][0]['id_proiect'];
            $res=$this->query($sql);
            array_push($rezultat,$res);
        }
        return $rezultat;
    }





}


?>