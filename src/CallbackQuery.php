<?php

namespace Shakibonline;

class CallbackQuery extends Types
{
    /**
     * Store Update type
     *
     * @var string $type
     */
    private $type;
    /**
     * Update object
     * @var array $update
     */
    private $update;
    /**
     * Message object
     * @var array $message
     */
    private $message;

    /**
     * Message constructor.
     * @param $update
     */
    public function __construct($update)
    {
        if ( array_key_exists(self::CALLBACK_QUERY, $update) ) {
            $type = 'callback_query';
        }else {
            return null;
        }
        $this->type = $type;
        $this->update = $update;
        $this->message = $update[$type];
        return $type;
    }

    /**
     * Return message type
     *
     * @return bool
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Return message id
     * @return mixed
     */
    public function ID()
    {
        return $this->message['id'];
    }

    public function User()
    {
        return new User($this->message['from']);
    }

    public function InlineMessageID()
    {
        return $this->message['inline_message_id'];
    }

    public function ChatInstance()
    {
        return $this->message['chat_instance'];
    }

    public function Data()
    {
        return $this->message['data'];
    }

    public function GameShortName()
    {
        return $this->message['game_short_name'];
    }
}