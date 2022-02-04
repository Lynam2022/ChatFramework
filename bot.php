<?php
include "ChatFramework/autoload.php"; // Include the right directory of autoload.php file in Framework's directory

$isHubChallenge = false; // set to true if you want to accept all Hub Challenge validation
$accessToken = "EAADI4oOl0dYBAPT11PiBJGMozU0Es3pvlw4MIB2FTA2qhkT7IMHtDyo1kWZCmfzi8LTeM4cX7Tkf41bnP5AoqZBzhxf9RhXoyuDMT3UfkVzPF2j2wYs06qIjzuLffGoZBYZAxgowUL0VwGU8j3KBwaZAm1eP12dtDEc70loeZCvFTdU83aA0EcdsRzLKTgRZBIZD";

$bot = new \NorthStudio\ChatFramework($accessToken, $isHubChallenge);
$builder = new \NorthStudio\MessageBuilder();

?>
