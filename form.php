<? 
extract($_POST);
if (mail($email, "temat", $wiadomosc)) {
echo "mail wyslany";
}
else {
 echo "mail nie został wysłany";
}
?> 