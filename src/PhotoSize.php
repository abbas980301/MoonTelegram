<?php

namespace Shakibonline;

class PhotoSize
{
    private $file_id;
    private $width;
    private $height;
    private $file_size;

    /**
     * User constructor.
     *
     * @param array $thumb
     */
    public function __construct($thumb)
    {
        $this->file_id = $thumb['file_id'];
        $this->width = $thumb['width'];
        $this->height = $thumb['height'];
        $this->file_size = $thumb['file_size'];
    }

    public function FileID()
    {
        return $this->file_id;
    }

    public function Width()
    {
        return $this->width;
    }

    public function Height()
    {
        return $this->height;
    }

    public function FileSize()
    {
        return $this->file_size;
    }
}
