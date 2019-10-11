<?php
include_once "classes/DB.php";

class Main
{
    use Book;
    use Disc;
    use Furniture;

    public $table = 'products';
    public $barcode;
    public $name;
    public $price;
    public $image;
    protected $height;
    protected $width;
    protected $length;
    protected $size;
    protected $weight;    

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
    
    public function setImage($image)
    {
        $this->image = $image;
    }

    // Read Data
    public function readAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
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

    // Delete Data
    public function delete(array $id)
    {
        $placeholders = trim(str_repeat('?,', count($id)), ',');
        $sql = "DELETE FROM $this->table WHERE id IN ($placeholders)";
        $stmt = DB::prepare($sql);
        return $stmt->execute($id);
    }
}

?>