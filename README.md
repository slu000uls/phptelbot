# PHP Bot Telegram

By Soheil

## Sample 1


### Simple Bot



```php
require 'Bot.php';

$bot = new Bot('TOKEN', 'USERNAME'); //put your bot token and username

$bot->text('Hi');

$bot->run();
```
When come a text from the bot the bot answer : **Hi**

### Sample 2

```php
require 'Bot.php';

$bot = new Bot('TOKEN', 'USERNAME');//put your bot token and username

$bot->chat('/start', 'welcome');
$bot->chat('/info', 'info of robot');


$bot->run();
```


1. When you send a **/start** to the bot then you get answer **welcome**

### Sample 3 (Keyboard)
```php
require 'Bot.php';

$bot = new Bot('TOKEN', 'USERNAME');

$bot->chat('/start', function(){
    $text = 'your message';
    $key = Bot::keyboard('
        [Help] [MENU]
    ');
    return Bot::sendMessage($text, ['reply'=>true, 'reply_markup'=>$key]);
});

$bot->chat('Help', 'you push help');
$bot->chat('MENU', 'you push menu');

$bot->run();
```

### Sample 4 (Inline Keyboard)

```php
require 'Bot.php';

$bot = new Bot('TOKEN', 'USERNAME');

$inline_keyboard = Bot::inline_keyboard('
   [بدم|بدی] [خوبم|خوبی]
');

$options = [
   'reply'=>true,
   'parse_mode'=>'html',
   'disable_web_page_preview'=>true,
   'reply_markup'=>$inline_keyboard
];

$bot->start("چطوری؟", $options);

$bot->callback_query(function () {
   $msg = Bot::message();
   $data = $msg['data'];
   return Bot::answerCallbackQuery("$data");
});

```

### Sample 5 (data of message)


```php
require 'Bot.php';
$bot = new Bot('TOKEN', 'USERNAME');
$bot->start('welcome');

$bot->photo(function () {
    $json = json_encode(Bot::message(), JSON_PRETTY_PRINT);
    return Bot::sendMessage("$json");
});

$bot->run();
```
When you send a photo to the bot you can get the information of the photo

### Sample 6 (resend photo to user)


```php
$bot->photo(function () {
    $msg = Bot::message();
    $photo = $msg['photo'][0]['file_id'];
    return Bot::sendPhoto($photo);
});

```

### Sample 7

```php
$bot->text('you send a text');
$bot->photo('you send a photo');
$bot->document('you send a document');
$bot->video('you send a video');
$bot->sticker('you send a sticker');

```

## Events

you can use `$bot->audio()` and :

- `text`
- `animation`
- `audio`
- `document`
- `photo`
- `sticker`
- `video`
- `video_note`
- `voice`
- `contact`
- `dice`
- `game`
- `poll`
- `venue`
- `location`
- `new_chat_members`
- `left_chat_members`
- `new_chat_title`
- `new_chat_photo`
- `delete_chat_photo`
- `group_chat_created`
- `supergroup_chat_created`
- `channel_chat_created`
- `message_auto_delete_timer_changed`
- `migrate_to_chat_id`
- `migrate_from_chat_id`
- `pinned_message`
- `invoice`
- `successful_payment`
- `connected_website`
- `passport_data`
- `proximity_alert_triggered`
- `voice_chat_scheduled`
- `voice_chat_started`
- `voice_chat_ended`
- `voice_chat_participants_invited`
- `inline_query`
- `callback_query`
- `edited_message`
- `channel_post`
- `edited_channel_post`

# Question
If You Have Question 
You Can Say To Me On Telegram : @slu00uls Good Luck
