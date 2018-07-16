<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
  $name = $_POST['userName1'];
  $email = $_POST['emailUser1'];
  $mytel = $_POST['telUser1'];
  $message = $_POST['textUser1'];
  $error = '';
  if(!$name) {$error .= 'Укажите свое имя. ';}
  if(!$email) {$error .= 'Укажите электронную почту. ';}
  if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
  if(!$error) {a
    $address = "toptopbrest@gmail.com";
    $sub = "СРОЧНО ОТВЕТИТЬ НАДО!";
    $mes = "Имя: ".$name."\n\nE-mail: ".$email."\n\nТелефон: ".$mytel."\n\nСообщение: ".$message."\n\n";
    $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
    if($send) {echo 'OK';}
  }
  else {echo '<div class="err">'.$error.'</div>';}
}
?>
