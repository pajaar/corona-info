<?php
// github.com/pajaar

$country = "indonesia";
$lol = json_decode(file_get_contents("https://api.teainside.org/corona/?country=".$country));
echo "Country: ".$country." | Confirmed: ".$lol->cmt." | Recovered: ".$lol->sdt." | Deaths: ".$lol->fst;
?>
