<?php 

// interfaces of each product type
interface HavingWeight
{
    public function setWeight($weight);
}

// traits of each product type
trait WithWeight
{
    // setters
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}

// Child classes
class Book extends Product implements HavingWeight
{
   use WithWeight;
}


?>