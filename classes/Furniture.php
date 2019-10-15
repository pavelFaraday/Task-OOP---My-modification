<?php 
include_once 'classes/Product.php'; 

// interfaces of each product type
interface HavingFur_dims
{
    public function setHeight($height);
    public function setWidth($width);
    public function setLength($length);
}

// traits of each product type
trait WithFur_dims
{
    // setters
    public function setHeight($height)
    {
        return $this->height = $height;
    }

    public function setWidth($width)
    {
        return $this->width = $width;
    }

    public function setLength($length)
    {
        return $this->length = $length;
    }
}

// Child classes
class Furniture extends Product implements HavingFur_dims
{
   use WithFur_dims;
}

?>