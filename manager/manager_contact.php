<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
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
        public function email($mail, $objet, $body){
            

        //Load Composer's autoloader
        require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'user@example.com';                     //SMTP username
            $mail->Password   = 'secret';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($mail, 'Mailer');
            
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $objet;
            $mail->Body    = $body;
            

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
            }
    }
?>