<?php
function sendMail( $message, $subject ) {
  $recipient = 'sense.money.media@gmail.com';
  $server    = 'ciao.jp-qa-sense@users402.phy.lolipop.jp';
  $headers   = "From: Log<$server>\r\n" .
               "Reply-To: $server\r\n" .
               "X-Mailer: PHP/phpversion()";
  mail( $recipient, $subject, $message, $headers );
}
