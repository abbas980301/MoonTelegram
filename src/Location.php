<?php

namespace Shakibonline;

class Location
{
    private $longitude;
    private $latitude;

    /**
     * User constructor.
     *
     * @param array $location
     */
    public function __construct($location)
    {
        $this->longitude = $location['longitude'];
        $this->latitude = $location['latitude'];
    }

    public function Longitude()
    {
        return $this->longitude;
    }

    public function Latitude()
    {
        return $this->latitude;
    }
}
