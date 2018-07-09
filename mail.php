<?php

$recepient = "toptopbrest@gmail.com";
$siteName = "МАГАЗИН ТОПТОП";

$name = trim($_POST["username"]);
$phone = trim($_POST["namberPhone"]);
$message = "Имя: $name \nТелефон: $phone";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>
