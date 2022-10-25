<?php
    //imports
    include './model/model_contact.php';
    include './manager/manager_contact.php';
    include './view/view_add_contact.php';
    $msg = "";
    //tests
    //test si le bouton est cliqué
    if(isset($_POST['submit'])){
        //test si les champs sont remplis
        if(!empty($_POST['objet_contact']) AND !empty($_POST['contenu_contact']) AND
        !empty($_POST['date_contact']) AND !empty($_POST['nom_contact']) AND
        !empty($_POST['prenom_contact']) AND !empty($_POST['mail_contact']) AND
        !empty($_POST['entreprise_contact'])){
            //instancier un objet 
            $form = new ManagerContact();
            //nettoyer les inputs et set des données
            $form->setObj(cleanInput($_POST['objet_contact']));
            $form->setContenu(cleanInput($_POST['contenu_contact']));
            $form->setDate(cleanInput($_POST['date_contact']));
            $form->setNom(cleanInput($_POST['nom_contact']));
            $form->setPrenom(cleanInput($_POST['prenom_contact']));
            $form->setMail(cleanInput($_POST['mail_contact']));
            $form->setEntreprise(cleanInput($_POST['entreprise_contact']));
            $form->setIdType(cleanInput($_POST['id_type_demande']));
            $form->addContact($bdd);
            $msg = "La demande à été envoyé";
        }
        else{
            $msg = "Veuillez remplir tous les champs";
        }
    }
    else{
        $msg = "Pour envoyer une demande veuillez remplir le formulaire";
    }
    echo $msg;
?>