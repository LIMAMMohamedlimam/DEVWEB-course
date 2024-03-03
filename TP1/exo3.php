<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXO3</title>
</head>
<body>
  <h1>EXO3</h1>
<?php

function min_maj($str1){
  $len = strlen($str1);
  $i = 0 ;
  while($i < strlen($str1)) {
    $c = $str1[$i];
    if (ctype_upper($c)) { 
      $c = strtolower($c);
      $str1[$i] = $c ;
      $i++ ;
    }elseif(ctype_lower($c)){
      $c = strtoupper($c) ;
      $str1[$i] = $c;
      $i++;
    }else{
      $i++;
    }
  }
  //echo $str1;
  return $str1;
}

function trouverMotLePlusLong($phrase) {
    // séparer les mots du phrase
    $mots = explode(' ', $phrase);
    $position = -1;
    $longueurMax = 0;
    $motLePlusLong = '';

    // parcourir les differents mots
    foreach ($mots as $index => $mot) {
        if (strlen($mot) > $longueurMax) {
            $longueurMax = strlen($mot);
            $motLePlusLong = $mot;
            $position = $index+1;
        }
    }
    echo htmlspecialchars($motLePlusLong." position:".$position) ;
}


echo htmlspecialchars("1)")."<br>" ;

$str1 = "wELCome mUssAB ZneIKA" ;

$res ="WelcOME MuSSab zNEika" ;

min_maj($str1) ;
$str1 = min_maj($str1)  ;
if($str1 == $res){
  echo htmlspecialchars("str1: ") . "<br>" ; 
  echo htmlspecialchars($str1);
  echo "<br>";
  echo htmlspecialchars("res: "). "<br>";
  echo htmlspecialchars($res)."<br>" ;
}else{
  echo htmlspecialchars("failure");
}

echo "<br>" ;

echo htmlspecialchars("2)")."<br>" ;
echo "<br>" ;


$phrase = "Mon premier cours commence aujourd'hui";
trouverMotLePlusLong($phrase);





?>

</body>
</html>