<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = $bot->getMessageText();

if ($text=='/help' || $text=='/menu'){
    $bot->reply(file_get_contents(__DIR__.'/teks/menu.txt'));
}
elseif($text=='halo' || $text=='Halo' || $text=='hai' || $text=='Hai'){
    $bot->reply($text.' juga');
}
else{
    $bot->reply($text);
}