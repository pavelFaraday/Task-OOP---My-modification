<?php 

class Furniture extends Main 
{
    protected $height;
    protected $width;
    protected $length;
    protected $size;
    protected $weight;

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

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}


?>