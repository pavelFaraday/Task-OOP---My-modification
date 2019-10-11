<?php 

interface Weight
{
    public function setWeight($weight);
}

interface Size
{
    public function setSize($size);
}

interface Fdim
{
    public function setHeight($height);
    public function setWidth($width);
    public function setLength($length);
}

class Types extends Main implements Weight,Size,Fdim
{
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setSize($size)
    {
        $this->size = $size;
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