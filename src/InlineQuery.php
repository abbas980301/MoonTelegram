<?php

namespace Shakibonline;

class InlineQuery extends Types
{
    /**
     * Store Update type.
     *
     * @var string
     */
    private $type;
    /**
     * Update object.
     *
     * @var array
     */
    private $update;
    /**
     * Message object.
     *
     * @var array
     */
    private $message;

    /**
     * Message constructor.
     *
     * @param $update
     */
    public function __construct($update)
    {
        if (array_key_exists(self::INLINE_QUERY, $update)) {
            $type = 'inline_query';
        } else {
            return;
        }
        $this->type = $type;
        $this->update = $update;
        $this->message = $update[$type];

        return $type;
    }

    /**
     * Return message type.
     *
     * @return bool
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Return message id.
     *
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

    public function Location()
    {
        return new Location($this->message['location']);
    }

    public function Query()
    {
        return $this->message['query'];
    }

    public function Offset()
    {
        return $this->message['offset'];
    }

    public function GameShortName()
    {
        return $this->message['game_short_name'];
    }
}
