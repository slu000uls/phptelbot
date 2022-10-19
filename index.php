<?php
require 'Bot.php';
//dont forget to setwebhook this file
$bot = new Bot('TOKEN', 'USERNAME'); // get TOKEN and USERNAME from @BotFather

$bot->chat('/start', 'Hello');

$bot->text('I dont know what you say!');

$bot->run();