<?php

namespace Shakibonline;

class VideoNote
{
    private $file_id;
    private $length;
    private $duration;
    private $thumb;
    private $file_size;

    /**
     * User constructor.
     *
     * @param array $video
     */
    public function __construct($video)
    {
        $this->thumb = $video['thumb'];
        $this->file_id = $video['file_id'];
        $this->duration = $video['duration'];
        $this->length = $video['length'];
        $this->file_size = $video['file_size'];
    }

    public function FileID()
    {
        return $this->file_id;
    }

    public function Length()
    {
        return $this->length;
    }

    public function Duration()
    {
        return $this->duration;
    }

    public function Thumb()
    {
        return new PhotoSize($this->thumb);
    }

    public function FileSize()
    {
        return $this->file_size;
    }
}
