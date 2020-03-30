$(function () {

    $('#contact-form').submit(function (e) {
        //on empeche le comportement par defaut du submit
        e.preventDefault();
        //on vide les commentaires d'erreurs s'il y en avait
        $('.comments').empty();

        let postdata = $("#contact-form").serialize();

        $.ajax({
            type: 'POST',
            url: "assets/php/contact.php",
            data: postdata,
            datatype: 'json',
            success: function (result, status) {
                //retransformer la string en objet
                result = JSON.parse(result)

                if (result.isSuccess) {
                    $("#contact-form").append("<p class='thank-you'>Votre message a bien été envoyé. Merci de m'avoir contacté !</p>")
                    $("#contact-form")[0].reset();
                } else {
                    $("#firstname + .comments").html(result.firstnameError);
                    $("#lastname + .comments").html(result.lastnameError);
                    $("#email + .comments").html(result.emailError);
                    $("#phone + .comments").html(result.phoneError);
                    $("#message + .comments").html(result.messageError);
                }
            },
            error: function (result, statut, erreur) {
                console.error("resultat error " + JSON.stringify(result));
                console.error("statut error " + statut);
                console.error("erreur " + erreur);
            }

        })

    })

});