## yii-extension-telegram-target

Realize telegram chat as log target.

### Config targets.

```php
'components' = [
    'log' => [
        'targets' => [
        [
            'class' => 'devskyfly\yiiExtensionTelegramTarget\TelegramTarget',
            'chatId' => "",
            'botToken' => "BOT:TOKEN",
            'botUserName' => 'BOTNAME',
            'levels' => ['error', 'warning'],
            'categories' => ['yii\db\*'],
            'except' => [
                    'yii\web\*',
            ],
        ],
        ...
    ]
]
```

### Bot config and group create

* Ask @Botfather for new bot (/newbot)
* Set bot name
* Set bot username
* Copy tocken
* Create group
* Add bot to group
* Write several masseges
* Make request https://api.telegram.org/bot**YourBOTToken**/getUpdates and get chatId
