<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Information extends CI_Model {
    public function insertSociete($nomEntreprise,$nomDirigeant,$objet,$debutExercice,$siege,$idFiscale,$stat,$rCS,$statut,$tenuCompte,$deviseEquivalence) {
        // $req = $this->db->query("select * from user");
        // foreach($req->result_array() as $row){
        //     if($row['nom'] == $nom && $row['mdp'] == $mdp) return $row['idUser'];
        // }
        // return 0;
        $req = "insert into societe values(default,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')";
        $req = sprintf($req,$this->db->replace($nomEntreprise))
        $this->db->exec();
    }
}
?>
