## yii-eaxtension-telegram-tarfet

Realize telegram chat as log target.

```php
'targets' => [
    [
        'class' => 'devskyfly\yiiExtensionTelegramTarget\TelegramTarget',
        'levels' => ['error', 'warning'],
        'categories' => ['yii\db\*'],
        'except' => [
                'yii\web\*',
        ],
    ],
    ...
```