
<?php
  $to = 'team@kiwisoft.cz';
  //$to="hajnina11@gmail.com";
  $subject = $_POST["name"];
  $message = $_POST["message"];
  $headers = 'From: '.$_POST["email"].';';

  mail($to, $subject, $message, $headers);

?>

<html>
<header>
  <meta charset="utf-8">
</header>
<body>
  <a href="index.html">Zpět na hlavní stránku</a><!-- Global site tag (gtag.js) - Google Analytics -->
</body></html>
