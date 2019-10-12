<?php 
include_once 'classes/Main.php'; 

interface Size
{
    public function setSize($size);
}

interface Weight
{
    public function setWeight($weight);
}

class Furniture extends Main implements Size,Weight
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