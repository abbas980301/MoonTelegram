<?php

namespace Shakibonline;

class ForwardFrom
{

    private $id;
    private $first_name;
    private $last_name;
    private $username;
    private $language_code;

    /**
     * User constructor.
     * @param array $user
     */
    public function __construct($forward_from)
    {
        $this->id = $forward_from['id'];
        $this->first_name = $forward_from['first_name'];
        $this->last_name = $forward_from['last_name'];
        $this->username = $forward_from['username'];
        $this->language_code = $forward_from['language_code'];
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