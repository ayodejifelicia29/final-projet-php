<?php 

    require_once("./inc/init.php");

    if($_POST) {
        
        $to = "email@example.com"; // Votre adresse mail
        $from = $_POST['email']; // L'adresse email de destination
        $first_name = $_POST['first_name']; // Récupération du prénom
        $last_name = $_POST['last_name']; // Récupération du nom
        $subject = "Formulaire de contact";
        $subject2 = "Copie de votre formulaire de contact";
        $message = $first_name . " " . $last_name . " a écrit le message suivant:" . "\n\n" . $_POST['message'];
        $message2 = "Ceci est une copie de votre message " . $first_name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        // Fonction prédéfinie PHP permettant d'envoyer un email
        mail($to,$subject,$message,$headers); // envoi du mail au propriétaire du site
        mail($from,$subject2,$message2,$headers2); // envoi une copie du message à l'envoyeur
        // Possibilité d'utiliser header('Location: thank_you.php'); pour rediriger vers une autre page.

        foreach($_POST as $indice => $valeur) {
            $_POST[$indice] = addslashes($valeur);
        }

        // Ajout de la demande de contact en BDD
        $count = $pdo->exec("INSERT INTO contact ( first_name, last_name, email, telephone, motive, message)
        VALUES( '$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[telephone]', '$_POST[motive]', '$_POST[message]' )");

        if($count > 0) {
            // Message de confirmation affiché à l'écran
            $content .= "<div class=\"col-md-12 alert alert-info\"role=\"alert\"> 
                Votre message a bien été envoyé, notre équipe s'engage à vous répondre dans un délai de 48h.
            </div>";
        }

    }

    $id_membre = (isset($_SESSION["membre"]["id_membre"])) ? $_SESSION["membre"]["id_membre"] : NULL;

    require_once("./inc/header.php");
?>

<h1 class="text-center p-2">Laissez-nous vos coordonnées et notre équipe reprendra contact avec vous.</h1>


<?php if(isset($count) && $count > 0) { ?>
    <?php echo $content; ?>
<?php } else { ?>
    
    <form class="row col-md-9 p-1 m-auto border border-lightborder border-secondary" method="post">
   
    
        <div class="form-group col-md-6  pt-3 ">
            <input type="hidden" name="id_membre" value="<?php echo $id_membre; ?>">
            <label  class ="mb-1" lable for="prenom">Prénom :</label>
            <input type="text" name="first_name" class="form-control pb-3" id="prenom" aria-describedby="prenom" placeholder="Enter your first name">
        </div>
        <div class="form-group col-md-6  pt-3 ">
            <label  class ="mb-1" label for="name">Nom :</label>
            <input type="text" name="last_name" class="form-control pb-3" id="name" placeholder="Enter your surname">
        </div>
        <div class="form-group col-md-6  pt-3 ">
            <label class ="mb-1" label for="name">Email :</label>
            <input type="email" name="email" class="form-control pb-3 " id="email" placeholder="Enter your email addresse">
        </div>
        <div class="form-group col-md-6  pt-3 ">
            <label class ="mb-1" label for="name">Telephone :</label>
            <input type="telephone" name="telephone" class="form-control pb-3" id="telephone" placeholder="Enter your telephone number">
        </div>
        <div class="form-group col-md-12 pt-3">
            <label for="exampleFormControlSelect1">En quoi pouvons-nous vous aider?</label>
            <select class="form-control pb-3" id="exampleFormControlSelect1" name="motive">
                <option value="J'ai une question sur une commande ">J'ai une question sur une commande !</option>
                <option value="J'ai une question sur un produit !<">J'ai une question sur un produit !</option>
                <option value="Je souhaite contacter le service après vente">Je souhaite contacter le service après vente.</option>
                <option value="Je suis fournisseur.">Je suis fournisseur.</option>
            </select>
        </div>
        <div class="form-group col-md-12 pt-3">
            <label class ="mb-1" for="message">Votre Message</label>
            <textarea class="form-control pb-3" id="message" name="message" placeholder="Write something.." rows="3"></textarea>
        </div>
        <div class="form-group col-md-12 p-4 s-center text-center">
            <button type="submit" class="btn btn-dark" style="background-color:#c09167">Envoyer son message</button>
        </div>
      </form>
      </div>
    
<?php } ?>

 <footer class="">
<?php
require_once("inc/footer.php");
?>
</footer>

