## yii-eaxtension-telegram-tarfet

```php
'targets' => [
    [
        'class' => 'devskyfly\yii-extension-telegram-target\TelegramTarget',
        'levels' => ['error', 'warning'],
        'categories' => ['yii\db\*'],
        'except' => [
                'yii\web\*',
        ],
    ],
    ...
```