<?php
    // avant la 1ere saisie
    $firstname = $name = $email = $phone = $message = "";
    // si il y a eu une saisie envoyée
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = verifyInput($_POST['firstname']);
        $lastname  = verifyInput($_POST['lastname']);
        $email     = verifyInput($_POST['email']);
        $phone     = verifyInput($_POST['phone']);
        $message   = verifyInput($_POST['message']);
    }

    /**
     * function verifyInput => securise les données saisies
     *
     * @param mixed $var
     * @return mixed
     * 
     */
    function verifyInput($var){
        $var = htmlspecialchars( stripslashes( trim($var) ) );
        return $var;
    }

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire web</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="container">

        <div class="divider"></div>
        <div class="heading">
            <h2>Contactez-moi</h2>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="contact-form" method="post" role="form">
                    <div class=row>
                        <div class="col-md-6">
                            <label for="firstname">Prénom<span class="green">*</span></label>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Votre prénom" value="<?= $firstname; ?>">
                            <p class="comments">Message d'erreur</p>
                        </div>
                        <div class="col-md-6">
                            <label for="lastname">Nom<span class="green">*</span></label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Votre nom" value="<?= $lastname; ?>">
                            <p class="comments">Message d'erreur</p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email<span class="green">*</span></label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Votre email" value="<?= $email; ?>">
                            <p class="comments">Message d'erreur</p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Téléphone</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Votre téléphone" value="<?= $phone; ?>">
                            <p class="comments">Message d'erreur</p>
                        </div>
                        <div class="col-md-12">
                            <label for="message">Message<span class="green">*</span></label>
                            <textarea name="message" id="message" class="form-control" placeholder="Votre message" rows="4"><?= $message; ?></textarea>
                            <p class="comments">Message d'erreur</p>
                        </div>

                        <div class="col-md-12">
                            <p class="green"><strong>* Ces information sont requises</strong></p>

                        </div>

                        <div class="col-md-12">
                            <input type="submit" class="button1 btn btn-success btn-lg" value="Envoyer">
                        </div>
                    </div>

                    <p class="thank-you">Votre message a bien été envoyé. Merci de m'avoir contacté !</p>
                </form>
            </div>
        </div>
    </div>


    <script src="assets/js/app.js"></script>
</body>

</html>