<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
    public function testLogin($nom,$mdp){
        $req = $this->db->query("select * from user");
        foreach($req->result_array() as $row){
            if($row['nom'] == $nom && $row['mdp'] == $mdp) return $row['idUser'];
        }
        return 0;
    }
}
?>
