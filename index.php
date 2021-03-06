
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
                <form action="" id="contact-form" method="post" role="form">
                    <div class=row>
                        <div class="col-md-6">
                            <label for="firstname">Prénom<span class="green">*</span></label>
                            <input type="text" name="firstname" id="firstname" class="form-control"  placeholder="Votre prénom" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="lastname">Nom<span class="green">*</span></label>
                            <input type="text" name="lastname" id="lastname" class="form-control"  placeholder="Votre nom" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email<span class="green">*</span></label>
                            <input type="text" name="email" id="email" class="form-control"  placeholder="Votre email" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Téléphone</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Votre téléphone" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <label for="message">Message<span class="green">*</span></label>
                            <textarea name="message" id="message" class="form-control"  placeholder="Votre message" rows="4"></textarea>
                            <p class="comments"></p>
                        </div>

                        <div class="col-md-12">
                            <p class="green"><strong>* Ces information sont requises</strong></p>

                        </div>

                        <div class="col-md-12">
                            <input type="submit" class="button1 btn btn-success btn-lg" value="Envoyer">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <script src="assets/js/app.js"></script>
</body>

</html>