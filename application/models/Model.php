<?php
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Model extends CI_Model 
{
    public function utilisateur()
    {
        $sql = "select * from utilisateur";
        $query = $this->db->query($sql);
        $valiny = array();

        foreach($query->result_array() as $row)
        {
            $valiny[] = $row;
        }
        return $valiny;
    }

    public function checkAdmin($mail,$pass)
    {
        $valiny = false;
        if ($mail == 'admin@gmail.com' && $pass == 'admin') {
            
            $valiny = true;
        }
        return $valiny;
    }

    public function checkLogin($mail,$pass)
    {
        $valiny = false;
        $listeUtil = array();
        $listeUtil = $this->Model->utilisateur();

        for ($i=0; $i < count($listeUtil); $i++) { 
            if($listeUtil[$i]['mail'] == $mail && $listeUtil[$i]['passWord'] == $pass)
            {
                $valiny = true;
            }
        }
        return $valiny;
    }

    public function checkIdUser($mail)
    {
        $sql = "select id from utilisateur where mail = '$mail'";
        $query = $this->db->query($sql);

        foreach($query->result_array() as $row)
        {
            $valiny = $row;
        }
        return $valiny;
    }

    public function insertObjet($nom, $sary, $description, $prixEstimatif)
    {
        $this->load->database();
        $sql="insert into objet values (null,'".$nom."','img/".$sary."','".$description."',".$prixEstimatif.")";
        var_dump($sql);
        $query= $this->db->query($sql);
    }

    public function allObj()
    {
        $sql = "select * from objet";
        $query = $this->db->query($sql);
        $valiny = array();

        foreach($query->result_array() as $row)
        {
            $valiny[] = $row;
        }
        return $valiny;
    }

    public function allObjParUser($idU)
    {
        $sql = "select * from ObjetParUser where idU = $idU";
        $query = $this->db->query($sql);
        $valiny = array();

        foreach($query->result_array() as $row)
        {
            $valiny[] = $row;
        }
        return $valiny;
    }

    public function objNotUser($idU)
    {
        $sql = "select * from ObjetParUser where idU != $idU";
        $query = $this->db->query($sql);
        $valiny = array();

        foreach($query->result_array() as $row)
        {
            $valiny[] = $row;
        }
        return $valiny;
    }

    public function inscription($nom,$mail,$passWord)
    {   
        $this->load->database();
        $listeUtil = $this->Model->utilisateur();
        $sql="insert into utilisateur values(null,'".$nom."',".$mail.",'".$passWord.")";
        $query= $this->db->query($sql);
        for($i=0; $i <count($listeUtil); $i++){
            if($listeUtil[$i]['mail'] == $mail)
            {
                $error = urlencode("Votre adresse email existe deja!!");
            }
            else if($listeUtil[$i]['mail'] != $mail)
            {
                redirect('takaloadmin/index');
            }

        }   
    }

        public function oneObjet($idObG)
    {
        $sql = "select * from objet where id = $idObG";
        $query = $this->db->query($sql);
	    $valiny = array();

        foreach($query->result_array() as $row)
        {
            $valiny[] = $row;
        }
        return $valiny;
    }

    public function checkUserDobjet($idObj)
    {
        $sql = "select idU from objetako where idObj = $idObj";
        $query = $this->db->query($sql);
        foreach($query->result_array() as $row)
        {
            $valiny = $row['idU'];
        }
        return $valiny;
    }

    public function insertobjattente($idUM ,$idObjGet,$idObjSet,$idUA)
    {
        $this->load->database();
        $sql="insert into echange values(null,".$idUM." ,".$idObjGet.",".$idObjSet.",".$idUA.",'en atente',now(),null)";
        $query= $this->db->query($sql);
        // return $query->result_array();
    }

    public function insertobjetaccepte($idUM ,$idObjGet,$idObjSet,$idUA)
    {
        $this->load->database();
        $sql="insert into echange values(null,".$idUM." ,".$idObjGet.",".$idObjSet.",".$idUA.",'accepte',null,now())";
        $query= $this->db->query($sql);
        // return $query->result_array();
    }

    public function insertobjetrefus($idUM ,$idObjGet,$idObjSet,$idUA)
    {
        $this->load->database();
        $sql="insert into echange values(null,".$idUM." ,".$idObjGet.",".$idObjSet.",".$idUA.",'refuse',null,now())";
        $query= $this->db->query($sql);
        // return $query->result_array();
    }

    public function objDemande($idUser)
    {
        $sql = "select idObjSet from echange where idUA = $idUser and dateaccept = 0";
        $query = $this->db->query($sql);
        foreach($query->result_array() as $row)
        {
            $valiny = $row;
        }
        return $valiny;
    }

    public function demandeOneUser($idUser)
    {
        $sql = "select * from echangePreci where idUA = $idUser and dateaccept = 0";
        $query = $this->db->query($sql);
        $valiny = array();
        foreach($query->result_array() as $row)
        {
            $valiny[] = $row;
        }
        return $valiny;
    }

    public function insertObjetAko($idU ,$idObj)
    {
        $this->load->database();
        $sql="insert into objetAko values($idU,$idObj,now())";
        $query= $this->db->query($sql);
        // return $query->result_array();
    }

}

?>