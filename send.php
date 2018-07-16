

<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

   if(!empty($_POST['userName1']) and !empty($_POST['telUser1']) and !empty($_POST['emailUser1'])
   and !empty($_POST['textUser1'])){
      $name = trim(strip_tags($_POST['userName1']));
      $phone = trim(strip_tags($_POST['telUser1']));
      $mail = trim(strip_tags($_POST['emailUser1']));
      $message = trim(strip_tags($_POST['textUser1']));

      mail('gerchuktoptop@gmail.com@gmail.com', 'Письмо с TOP-TOP',
      'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");

      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в
      ближайшее время<Br> $back";

      exit;
   }
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
