<?php
$token = "8212943180:AAFHjK_ocxFk8ssoZmtxHP-L7qnMJ3Ok9Rg";
$chat_id = "972714908";
$text = "Сообщение с сайта";

$url = "https://api.telegram.org/bot$token/sendMessage";

$data = [
  "chat_id" => $chat_id,
  "text" => $text
];

file_get_contents($url . "?" . http_build_query($data));