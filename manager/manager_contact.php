<?php
    class ManagerContact extends Contact{
        
        //Méthodes
        public function addContact(object $bdd):void{
            //récupération des valeurs de l'objet ManagerContact
            $obj = $this->getObjet();
            $contenu = $this->getContenu();
            $date = $this->getDate();
            $nom = $this->getNom();
            $prenom = $this->getPrenom();
            $mail = $this->getMail();
            $entreprise = $this->getEntreprise();
            $idType = $this->getIdType();
            try {
                $req = $bdd->prepare("INSERT INTO contact
                (objet_contact, contenu_contact, date_contact,
                nom_contact, prenom_contact, mail_contact, entreprise_contact,
                id_type_demande)VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
                $req->bindParam(1, $obj, PDO::PARAM_STR);
                $req->bindParam(2, $contenu, PDO::PARAM_STR);
                $req->bindParam(3, $date, PDO::PARAM_STR);
                $req->bindParam(4, $nom, PDO::PARAM_STR);
                $req->bindParam(5, $prenom, PDO::PARAM_STR);
                $req->bindParam(6, $mail, PDO::PARAM_STR);
                $req->bindParam(7, $entreprise, PDO::PARAM_STR);
                $req->bindParam(8, $idType, PDO::PARAM_INT);
                $req->execute();
            } 
            catch (Exception $e) 
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>