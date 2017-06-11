<?php

namespace Shakibonline;

class Venue
{
    private $location;
    private $title;
    private $address;
    private $foursquare_id;

    /**
     * User constructor.
     *
     * @param array $venue
     */
    public function __construct($venue)
    {
        $this->location = $venue['location'];
        $this->title = $venue['title'];
        $this->address = $venue['address'];
        $this->foursquare_id = $venue['foursquare_id'];
    }

    public function Location()
    {
        return new Location($this->location);
    }

    public function Title()
    {
        return $this->title;
    }

    public function Address()
    {
        return $this->address;
    }

    public function FoursquareID()
    {
        return $this->foursquare_id;
    }
}
