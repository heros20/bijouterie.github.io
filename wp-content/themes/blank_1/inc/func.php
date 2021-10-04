<?php

function debug(array $array){
    echo '<pre style="height:200px;overflow-y:scroll;font-size:.8em;padding:10px;font-family:Consolas, Monospace;background-color:#000;color:white;">';
     print_r($array); 
   echo '</pre>';
}

function failleXSS($clean){
  return trim(strip_tags($_POST[$clean]));
}

function validForm($errors,$data,$key,$min =2,$max = 50)
{
    if(!empty($data)) {
        if(mb_strlen($data) < $min) {
            $errors[$key] = 'min '.$min.' caractères';
        } elseif(mb_strlen($data) > $max) {
            $errors[$key] = 'max '.$max.' caractères';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}

function validCheck($errors,$data,$key)
{
    if(empty($data)) {
       $errors[$key] = 'Veuillez renseigner au moins une pierre';
    }
    return $errors;
}

    

function validEmail($errors,$data,$key){

  if(!empty($data)) {

      if(filter_var($data, FILTER_VALIDATE_EMAIL) == false){ // pk !== true ne fonctionne pas ?
          $errors[$key] = 'veuillez renseignez une adresse email valide';
      } 
  } else {
          $errors[$key] = 'veuillez renseignez ce champ';
  }
  return $errors;
}



  