<?php
$datas =array("firstname"=> "",
              "lastname" => "",
              "email"    => "",
              "phone"    => "",
              "message"  => "",
              "firstnameError" => "",
              "lastnameError"  => "",
              "emailError"     => "",
              "phoneError"     => "",
              "messageError"   => "",
              "isSuccess"      => false 
            );

$emailTo = "test@test.com";

// si il y a eu une saisie envoyée
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datas['firstname'] = verifyInput($_POST['firstname']);
    $datas['lastname']  = verifyInput($_POST['lastname']);
    $datas['email']     = verifyInput($_POST['email']);
    $datas['phone']     = verifyInput($_POST['phone']);
    $datas['message']   = verifyInput($_POST['message']);
    $datas['isSuccess'] = true;
    $emailContent = "";

    if (empty($datas['firstname'])) {

        $datas['firstnameError'] = "hey prénom oublié?";
        $datas['isSuccess']      = false;
    } else {
        $emailContent .= "Firstname : " . $datas['firstname'] . " \n";
    }
    if (empty($datas['lastname'])) {

        $datas['lastnameError'] = "Tu n'as pas de nom???";
        $datas['isSuccess']      = false;
    } else {
        $emailContent .= "lastname : " . $datas['lastname'] . " \n";
    }

    if (!isEmail($datas['email'])) {
        $datas['emailError'] = "hey ce mail n'est pas valide !!!!";
        $datas['isSuccess']      = false;
    } else {
        $emailContent .= "email : " . $datas['email'] . " \n";
    }

    if (!isPhone($datas['phone'])) {
        $datas['phoneError'] = "Verifier votre numéro de telephone (chiffres uniquement) ";
        $datas['isSuccess']      = false;
    } else {
        $emailContent .= "phone : " . $datas['phone'] . " \n";
    }
    if (empty($datas['message'])) {
        $datas['messageError'] = "hey j'ai pas compris ton message, c'est vide !!!";
        $datas['isSuccess']      = false;
    } else {
        $emailContent .= "message : " . $datas['message'] . " \n";
    }

    if ($datas['isSuccess']) {
        //envoi de l'email
        $headers = "From: " 
                   . $datas['firstname'] 
                   . " " 
                   . $datas['lastname'] 
                   . " <"
                   .$datas['email']
                   .">\r\nReply-to:"
                   .$datas['email'];
        sendMail($headers, $emailTo, $emailContent);

        //remise a zero des variables
        // $datas = array(
        //     "firstname" => "",
        //     "lastname" => "",
        //     "email"    => "",
        //     "phone"    => "",
        //     "message"  => "",
        //     "firstnameError" => "",
        //     "lastnameError"  => "",
        //     "emailError"     => "",
        //     "phoneError"     => "",
        //     "messageError"   => "",
        //     "isSuccess"      => false
        // );
    }

    echo json_encode($datas);
}


/**
 * function verifyInput => securise les données saisies
 *
 * @param mixed $var
 * @return mixed
 * 
 */
function verifyInput($var)
{
    $var = htmlspecialchars(stripslashes(trim($var)));
    return $var;
}

/**
 * function isEmail => test la validité de l'email saisie
 *
 * @param  string  $var
 * @return boolean
 */
function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

/**
 * function isPhone => test la saisie d'un numero de telephone
 *
 * @param  int    $var
 * @return boolean
 */
function isPhone($var)
{
    return preg_match("/^[0-9 ]*$/", $var);
}

function sendMail($headers,$emailTo, $emailContent){
    mail($emailTo, "un message de votre site", $emailContent, $headers);

}