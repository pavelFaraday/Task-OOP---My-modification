<?php
include_once 'classes/Main.php'; 

class Types extends Main
{
    public function setSize($size)
    {
        $this->size = $size;
    } 

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }
}

?>