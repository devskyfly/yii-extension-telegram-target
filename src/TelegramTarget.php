<?php
namespace devskyfly\yiiExtensionTelegramTarget;

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;
use devskyfly\php56\types\Str;
use yii\log\Target;

class TelegramTarget extends Target
{
    public $chatId;
    public $botToken;
    public $botUserName;

    public function init()
    {
        parent::init();
        if (!Str::isString($this->chatId)) {
            throw new \InvalidArgumentException("Property chatId is not string type.");    
        }
        if (!Str::isString($this->botToken)) {
            throw new \InvalidArgumentException("Property botToken is not string type.");    
        }
        if (!Str::isString($this->botUserName)) {
            throw new \InvalidArgumentException("Property botUserName is not string type.");    
        }
    }

    public function export()
    {
        $text = implode("\n", array_map([$this, 'formatMessage'], $this->messages)) . "\n";
        $telegram = new Telegram($this->botToken, $this->botUserName);
        $response = Request::sendMessage(
            [
                'chat_id'=>$this->chatId,
                'text'=>$text
            ]
        );
    }
}