## yii-extension-telegram-target

Realize telegram chat as log target.

```php
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
```