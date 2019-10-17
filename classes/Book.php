<?php 

interface HavingWeight
{
    public function setWeight($weight);
}

trait Book 
{
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}

?>