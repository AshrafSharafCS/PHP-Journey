<?php
function validIP($ip)
{   $valid=false;
    $split = explode(".", $ip);
    if (sizeof($split) == 4) {
        for ($i = 0; $i < sizeof($split); $i++) {
            if(check($split)){
                $valid = true;
            }; 
        }
        return $valid;
    }
}
function check($octet)
{
    $isValid = false;

    if ($octet < 999) {
        if ($octet[0] != 0 && $octet < 9) {
            $isValid = true;
        }
    }
    return $isValid;
}

?>