<?php
include APP_DIR.'class/commit.php';
class Etape_model extends Model {
    public function getStats($user,$repo,$sha)
    {
       // echo 'https://api.github.com/repos/'.$user.'/'.$repo.'/commits/'.$sha."?client_id=e1b3d2ba09307985a45a&client_secret=b4f70cee4330d9d80c48084c064afd8a9a27d350";
		$c = curl_init ();
		curl_setopt ($c, CURLOPT_URL,'https://api.github.com/repos/'.$user.'/'.$repo.'/commits/'.$sha."?client_id=e1b3d2ba09307985a45a&client_secret=b4f70cee4330d9d80c48084c064afd8a9a27d350");  
		curl_setopt($c, CURLOPT_HTTPHEADER, array(
		    'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0'
		));            // stabilim URL-ul serviciului
		curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);  // rezultatul cererii va fi disponibil ca șir de caractere
		curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false); // nu verificam certificatul digital
		$res = curl_exec ($c);                           // executam cererea GET
		curl_close ($c);
        $json=json_decode($res);
        $result=array();
            return $json->stats;
            //print_r($json->files);
    }
    public function getFiles($user,$repo,$sha)
    {
        $c = curl_init ();
		curl_setopt ($c, CURLOPT_URL,"https://api.github.com/repos/'.$user.'/'.$repo.'/commits/".$sha."?client_id=e1b3d2ba09307985a45a&client_secret=b4f70cee4330d9d80c48084c064afd8a9a27d350");  
		curl_setopt($c, CURLOPT_HTTPHEADER, array(
		    'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0'
		));            // stabilim URL-ul serviciului
		curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);  // rezultatul cererii va fi disponibil ca șir de caractere
		curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false); // nu verificam certificatul digital
		$res = curl_exec ($c);                           // executam cererea GET
		curl_close ($c);
        $json=json_decode($res);
        $result=array();
            return $json->files;
    }
    public function getCommits($user,$repo)
    {
        define ('URLfile', 'https://api.github.com/repos/'.$user.'/'.$repo.'/commits?client_id=e1b3d2ba09307985a45a&client_secret=b4f70cee4330d9d80c48084c064afd8a9a27d350');
		$c = curl_init ();
		curl_setopt ($c, CURLOPT_URL, URLfile);  
		curl_setopt($c, CURLOPT_HTTPHEADER, array(
		    'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0'
		));            // stabilim URL-ul serviciului
		curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);  // rezultatul cererii va fi disponibil ca șir de caractere
		curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false); // nu verificam certificatul digital
		$res = curl_exec ($c);                           // executam cererea GET
		curl_close ($c);
        $json=json_decode($res);
        $result=array();
		foreach ($json as $item) {
            $commit=new Commit();
            $commit->set($item->commit->author->name,substr($item->commit->author->date,0,10),$item->commit->message,$item->html_url);
            $url=explode('/',$item->html_url);
            $commit->status= $this->getStats($user,$repo,$url[6]);
            //if(isset($item->parents[0]->url))$commit->files=$this->getFiles($user,$repo,$url[6]);
            array_push($result,$commit);
        }
        return $result;
    }
    public function getInfo($id)
    {
        $sql="SELECT git_repos, git_username From studenti where id_student=".$id;
        $res=$this->query($sql);
        return $res;
    }
    
}


?>