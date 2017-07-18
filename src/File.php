<?php

namespace Shakibonline;

class File
{
    private $file_id;
    private $file_size;
    private $file_path;

    /**
     * User constructor.
     *
     * @param array $file
     */
    public function __construct($file)
    {
        $this->file_id = $file['file_id'];
        $this->file_size = $file['file_size'];
        $this->file_path = $file['file_path'];
    }

    public function FileID()
    {
        return $this->file_id;
    }

    public function FileSize()
    {
        return $this->file_size;
    }

    public function FilePath()
    {
        return $this->file_path;
    }
}
