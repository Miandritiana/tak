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
        $sql="insert into objet values(null,'".$nom."',".$sary.",'".$description."',".$prixEstimatif.")";
        $query= $this->db->query($sql);
        return $query->result_array;
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

}

?>