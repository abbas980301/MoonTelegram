<?php

namespace Shakibonline;

class User
{
    private $id;
    private $first_name;
    private $last_name;
    private $username;
    private $language_code;

    /**
     * User constructor.
     *
     * @param array $user
     */
    public function __construct($user)
    {
        $this->id = $user['id'];
        $this->first_name = $user['first_name'];
        $this->last_name = $user['last_name'];
        $this->username = $user['username'];
        $this->language_code = $user['language_code'];
    }

    public function ID()
    {
        return $this->id;
    }

    public function FirstName()
    {
        return $this->first_name;
    }

    public function LastName()
    {
        return $this->last_name;
    }

    public function UserName()
    {
        return $this->username;
    }

    public function LanguageCode()
    {
        return $this->language_code;
    }
}
