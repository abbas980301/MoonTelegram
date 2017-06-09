<?php

namespace Shakibonline;

class Message extends Types
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
        $type = 'message';
        if ( array_key_exists(self::CHANNEL_POST, $update) ) {
            $type = 'channel_post';
        }elseif ( array_key_exists(self::EDITED_MESSAGE, $update) ) {
            $type = 'edited_message';
        }elseif ( array_key_exists(self::EDITED_CHANNEL_POST, $update) ) {
            $type = 'edited_channel_post';
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
     * Print message due type
     */
    public function printMessage()
    {
        echo json_encode(
            $this->message
            //$this->update[$this->type]
            ,
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Return message id
     * @return mixed
     */
    public function MessageID()
    {
        return $this->message['message_id'];
    }

    public function User()
    {
        return new User($this->message['from']);
    }

    public function Date()
    {
        return $this->message['date'];
    }

    public function Chat()
    {
        return new Chat($this->message['chat']);
    }

    public function ForwardFrom()
    {
        return new User($this->message['forward_from']);
    }

    public function ForwardFromChat()
    {
        return new Chat($this->message['forward_from_chat']);
    }

    public function ForwardFromMessageID()
    {
        return $this->message['forward_from_message_id'];
    }

    public function ForwardDate()
    {
        return $this->message['forward_date'];
    }

    public function ReplyToMessage()
    {
        return new Message($this->message['reply_to_message']);
    }


    public function EditDate()
    {
        return $this->message['edit_date'];
    }


    public function Text()
    {
        return $this->message['text'];
    }


    public function Entities()
    {
        return json_encode($this->message['entities']);
    }

    public function Audio()
    {
        return new Audio($this->message['audio']);
    }


    public function Document()
    {
        return new Document($this->message['audio']);
    }

    public function Caption()
    {
        return $this->message['caption'];
    }


}