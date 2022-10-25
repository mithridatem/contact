<?php
    class Contact{
        //Attributs
        private ?int $id_contact;
        private ?string $objet_contact;
        private ?string $contenu_contact;
        private ?string $date_contact;
        private ?string $nom_contact;
        private ?string $prenom_contact;
        private ?string $mail_contact;
        private ?string $entreprise_contact;
        /*Foreign key */
        private ?int $id_type_demande;
        //Constructeur
        public function __construct(){}
        //Getter and Setter
        /*Getters*/
        public function getId():?int{
            return $this->id_contact;
        }
        public function getObjet():?string{
            return $this->objet_contact;
        }
        public function getContenu():?string{
            return $this->contenu_contact;
        }
        public function getDate():?string{
            return $this->date_contact;
        }
        public function getNom():?string{
            return $this->nom_contact;
        }
        public function getPrenom():?string{
            return $this->prenom_contact;
        }
        public function getMail():?string{
            return $this->mail_contact;
        }
        public function getEntreprise():?string{
            return $this->entreprise_contact;
        }
        public function getIdType():?int{
            return $this->id_type_demande;
        }
        /*Setters*/
        public function setId(?int $id):void{
            $this->id_contact = $id;
        }
        public function setObj(?string $obj):void{
            $this->objet_contact = $obj;
        }
        public function setContenu(?string $contenu):void{
            $this->contenu_contact = $contenu;
        }
        public function setDate(?string $date):void{
            $this->date_contact = $date;
        }
        public function setNom(?string $nom):void{
            $this->nom_contact = $nom;
        }
        public function setPrenom(?string $prenom):void{
            $this->prenom_contact = $prenom;
        }
        public function setMail(?string $mail):void{
            $this->mail_contact = $mail;
        }
        public function setEntreprise(?string $entreprise):void{
            $this->entreprise_contact = $entreprise;
        }
        public function setIdType(?int $id):void{
            $this->id_type_demande = $id;
        }
    }
?>