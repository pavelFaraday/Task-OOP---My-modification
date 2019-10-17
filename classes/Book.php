<?php 

// interfaces
interface HavingWeight
{
    public function setWeight($weight);
}

// traits
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