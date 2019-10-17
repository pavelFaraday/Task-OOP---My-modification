<?php 

interface HavingFur_dims
{
    public function setHeight($height);
    public function setWidth($width);
    public function setLength($length);
}

trait Furniture
{
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