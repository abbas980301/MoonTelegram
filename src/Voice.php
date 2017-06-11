<?php

namespace Shakibonline;

class Voice
{
    private $file_id;
    private $duration;
    private $mime_type;
    private $file_size;

    /**
     * User constructor.
     *
     * @param array $video
     */
    public function __construct($video)
    {
        $this->file_id = $video['file_id'];
        $this->duration = $video['duration'];
        $this->mime_type = $video['mime_type'];
        $this->file_size = $video['file_size'];
    }

    public function FileID()
    {
        return $this->file_id;
    }

    public function Duration()
    {
        return $this->duration;
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
