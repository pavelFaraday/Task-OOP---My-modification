<?php 

// interfaces of each product type
interface HavingSize
{
    public function setSize($size);
}

// traits of each product type
trait WithSize
{
    // setters    
    public function setSize($size)
    {
        return $this->size = $size;
    } 
}

// Child classes
class Disc extends Product implements HavingSize
{
   use WithSize;
}


?>