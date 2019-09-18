<?php
include "classes/Main.php";

class Product extends Main 
{      
    protected $table = 'products';
    
    private $barcode;
    private $name;
    private $price;
    private $size;
    private $height;
    private $width;
    private $length;
    private $weight;
    private $image;
        
    // SET Parametres
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
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

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    // Create Data
    public function insert()
    {
        $sql = "INSERT INTO $this->table(barcode, name, price, size, height, width, length, weight, image)VALUES(:barcode, :name, :price, :size, :height, :width, :length, :weight, :image)";

        $stmt = DB::prepare($sql);
        $stmt->bindParam(':barcode', $this->barcode);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':size', $this->size);
        $stmt->bindParam(':height', $this->height);
        $stmt->bindParam(':width', $this->width);
        $stmt->bindParam(':length', $this->length);
        $stmt->bindParam(':weight', $this->weight);
        $stmt->bindParam(':image', $this->image);
        return $stmt->execute();
    }
}
?>