<?php 

function validate($email, $password) {
   
    $emailRegex = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/';
    $passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';

  
    $validemail = preg_match($emailRegex, $email);

    $validpass = preg_match($passwordRegex, $password);




}


?>