<?php

namespace Shakibonline;

class Contact
{

    private $phone_number;
    private $first_name;
    private $last_name;
    private $user_id;

    /**
     * User constructor.
     * @param array $contact
     */
    public function __construct($contact)
    {
        $this->phone_number   = $contact['phone_number'];
        $this->first_name  = $contact['first_name'];
        $this->last_name = $contact['last_name'];
        $this->user_id = $contact['user_id'];
    }

    public function PhoneNumber()
    {
        return $this->phone_number;
    }


    public function FirstName()
    {
        return $this->first_name;
    }

    public function LastName()
    {
        return $this->last_name;
    }

    public function UserID()
    {
        return $this->user_id;
    }
}