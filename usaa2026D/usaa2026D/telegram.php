<?php
$apiToken = "";      // Place your API Token between ""; //
$data = [
    'chat_id' => '',     // Place your chat ID between ""; //
    'text' => "$message"
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
