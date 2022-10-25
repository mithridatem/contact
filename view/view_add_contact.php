<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de contact</title>
</head>
<body>
    <h3>Demande de contact : </h3>
    <form action="" method="post">
        <label for="objet_contact">Saisir l'objet :</label>
        <p><input type="text" name="objet_contact"></p>
        <label for="contenu_contact">Saisir le contenu :</label>
        <p><textarea name="contenu_contact" cols="30" rows="10"></textarea></p>
        <label for="date_contact">Saisir la date :</label>
        <p><input type="datetime-local" name="date_contact"></p>
        <label for="nom_contact">Saisir votre nom :</label>
        <p><input type="text" name="nom_contact"></p>
        <label for="prenom_contact">Saisir votre prénom :</label>
        <p><input type="text" name="prenom_contact"></p>
        <label for="mail_contact">Saisir votre mail :</label>
        <p><input type="mail" name="mail_contact"></p>
        <label for="nom_contact">Saisir votre entreprise :</label>
        <p><input type="text" name="entreprise_contact"></p>
        <label for="id_type_demande">Choisir votre demande :</label>
        <select name="id_type_demande">
            <option value="1" selected>aucune</option>
            <option value="2">informations</option>
            <option value="3">devis</option>
            <option value="4">facture</option>
            <option value="5">autre</option>
        </select>
        <p><input type="submit" value="envoyer" name="submit"></p>
    </form>
</body>
</html>