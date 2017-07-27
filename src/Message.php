<?php

namespace Shakibonline;

error_reporting(0);

class Message extends Types
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
        $type = 'message';
        if (array_key_exists(self::CHANNEL_POST, $update)) {
            $type = 'channel_post';
        } elseif (array_key_exists(self::EDITED_MESSAGE, $update)) {
            $type = 'edited_message';
        } elseif (array_key_exists(self::EDITED_CHANNEL_POST, $update)) {
            $type = 'edited_channel_post';
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
     * Set Message.
     *
     * this method use in replay mode.
     *
     * @param array $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Print message due type.
     */
    public function printMessage()
    {
        echo json_encode($this->message, 128 | 256);
    }

    /**
     * Return message id.
     *
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
        $reply = new self($this->message['reply_to_message']);
        $reply->setMessage($this->message['reply_to_message']);

        return $reply;
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

    public function PhotoSmall()
    {
        return $this->_photo(0);
    }

    /**
     * Return Photo index
     * @return mixed
     */
    public function Photo()
    {
        return $this->message['photo'];
    }

    public function PhotoMedium()
    {
        return $this->_photo(1);
    }

    public function PhotoLarge()
    {
        return $this->_photo(2);
    }

    public function Sticker()
    {
        return new Sticker($this->message['sticker']);
    }

    public function Video()
    {
        return new Video($this->message['video']);
    }

    public function Voice()
    {
        return new Voice($this->message['voice']);
    }

    public function VideoNote()
    {
        return new VideoNote($this->message['voice']);
    }

    public function NewChatMembers()
    {
        return json_decode($this->message['new_chat_members']);
    }

    public function Caption()
    {
        return $this->message['caption'];
    }

    public function Contact()
    {
        return new Contact($this->message['voice']);
    }

    public function Location()
    {
        return new Location($this->message['location']);
    }

    public function Venue()
    {
        return new Venue($this->message['venue']);
    }

    public function NewChatMember()
    {
        return new User($this->message['new_chat_member']);
    }

    public function LeftChatMember()
    {
        return new User($this->message['left_chat_member']);
    }

    public function NewChatTitle()
    {
        return $this->message['new_chat_title'];
    }

    public function NewChatPhoto()
    {
        // todo wrong!
        return new PhotoSize($this->message['new_chat_photo']);
    }

    public function DeleteChatPhoto()
    {
        return var_export($this->message['delete_chat_photo'], true);
    }

    public function GroupChatCreated()
    {
        return var_export($this->message['group_chat_created'], true);
    }

    public function SupergroupChatCreated()
    {
        return var_export($this->message['supergroup_chat_created'], true);
    }

    public function ChannelChatCreated()
    {
        return var_export($this->message['channel_chat_created'], true);
    }

    public function MigrateToChatID()
    {
        return $this->message['migrate_to_chat_id'];
    }

    public function MigrateFromChatID()
    {
        return $this->message['migrate_from_chat_id'];
    }

    private function _photo($index)
    {
        return new PhotoSize($this->message['photo'][$index]);
    }
}
