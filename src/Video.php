<?php

namespace Shakibonline;

class Video
{
    private $file_id;
    private $width;
    private $height;
    private $duration;
    private $thumb;
    private $mime_type;
    private $file_size;

    /**
     * User constructor.
     *
     * @param array $video
     */
    public function __construct($video)
    {
        $this->width = $video['width'];
        $this->thumb = $video['thumb'];
        $this->height = $video['height'];
        $this->file_id = $video['file_id'];
        $this->duration = $video['duration'];
        $this->mime_type = $video['mime_type'];
        $this->file_size = $video['file_size'];
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

    public function Duration()
    {
        return $this->duration;
    }

    public function Thumb()
    {
        return new PhotoSize($this->thumb);
    }

    public function MimeType()
    {
        return $this->mime_type;
    }

    public function FileSize()
    {
        return $this->file_size;
    }
}
