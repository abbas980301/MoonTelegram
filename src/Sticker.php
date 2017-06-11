<?php

namespace Shakibonline;

class Sticker
{
    private $file_id;
    private $width;
    private $height;
    private $thumb;
    private $emoji;
    private $file_size;

    /**
     * User constructor.
     *
     * @param array $sticker
     */
    public function __construct($sticker)
    {
        $this->file_id = $sticker['file_id'];
        $this->width = $sticker['width'];
        $this->height = $sticker['height'];
        $this->thumb = $sticker['thumb'];
        $this->emoji = $sticker['emoji'];
        $this->file_size = $sticker['file_size'];
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

    public function Thumb()
    {
        return new PhotoSize($this->thumb);
    }

    public function Emoji()
    {
        return $this->emoji;
    }

    public function FileSize()
    {
        return $this->file_size;
    }
}
