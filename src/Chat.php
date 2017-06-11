<?php

namespace Shakibonline;

class Chat
{
    private $id;
    private $type;
    private $title;
    private $username;
    private $first_name;
    private $last_name;
    private $all_members_are_administrators;

    /**
     * User constructor.
     *
     * @param array $chat
     */
    public function __construct($chat)
    {
        $this->id = $chat['id'];
        $this->type = $chat['type'];
        $this->title = $chat['title'];
        $this->username = $chat['username'];
        $this->first_name = $chat['first_name'];
        $this->last_name = $chat['last_name'];
        $this->all_members_are_administrators = $chat['all_members_are_administrators'];
    }

    public function ID()
    {
        return $this->id;
    }

    public function Type()
    {
        return $this->type;
    }

    public function Title()
    {
        return $this->title;
    }

    public function UserName()
    {
        return $this->username;
    }

    public function FirstName()
    {
        return $this->first_name;
    }

    public function LastName()
    {
        return $this->last_name;
    }

    public function all_members_are_administrators()
    {
        return var_export($this->all_members_are_administrators, 1);
    }
}
