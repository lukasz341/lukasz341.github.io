<? 
extract($_POST);
$headers=$email." Imię: ".$imie;
if (mail("kaleta.lukasz@gmail.com", "Od webdeveloper.cal24.pl", $wiadomosc, $headers)) {
    echo "mail wyslany";
}
else {
    echo "mail nie został wysłany";
}

if ($imie=='') {
    echo "mail nie wysłany";
}
?> 

