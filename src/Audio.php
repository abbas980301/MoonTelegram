<?php

namespace Shakibonline;

class Audio
{
    private $file_id;
    private $duration;
    private $performer;
    private $title;
    private $mime_type;
    private $file_size;

    /**
     * User constructor.
     *
     * @param array $audio
     */
    public function __construct($audio)
    {
        $this->file_id = $audio['file_id'];
        $this->duration = $audio['duration'];
        $this->performer = $audio['performer'];
        $this->title = $audio['title'];
        $this->mime_type = $audio['mime_type'];
        $this->file_size = $audio['file_size'];
    }

    public function FileID()
    {
        return $this->file_id;
    }

    public function Duration()
    {
        return $this->duration;
    }

    public function Performer()
    {
        return $this->performer;
    }

    public function Title()
    {
        return $this->title;
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
