<?php

namespace Shakibonline;

class Document
{
    private $file_id;
    private $thumb;
    private $file_name;
    private $mime_type;
    private $file_size;

    /**
     * User constructor.
     *
     * @param array $document
     */
    public function __construct($document)
    {
        $this->file_id = $document['file_id'];
        $this->thumb = $document['thumb'];
        $this->file_name = $document['file_name'];
        $this->mime_type = $document['mime_type'];
        $this->file_size = $document['file_size'];
    }

    public function FileID()
    {
        return $this->file_id;
    }

    public function Thumb()
    {
        return new PhotoSize($this->thumb);
    }

    public function FileName()
    {
        return $this->file_name;
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
