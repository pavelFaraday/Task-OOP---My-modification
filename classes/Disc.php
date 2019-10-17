<?php

interface HavingSize
{
    public function setSize($size);
}

trait Disc
{
    public function setSize($size)
    {
        $this->size = $size;
    }  
}

?>