<?php


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