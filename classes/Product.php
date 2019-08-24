<?php
    include "classes/Main.php";

    class Product extends Main {    // DONE  
        protected $table = 'products'; // DONE
        private $barcode; //  DONE
        private $name; //  DONE
        private $price; //  DONE
        private $size; //  DONE
        private $height; //  DONE
        private $width; //  DONE
        private $length; //  DONE
        private $weight; //  DONE
        private $image; //  DONE
        
        // SET Parametres
        public function setBarcode($barcode){ // DONE
            $this->barcode=$barcode;
        }
        public function setName($name){ // DONE
            $this->name=$name;
        }
        public function setPrice($price){ // DONE
            $this->price=$price;
        }
        public function setSize($size){ // DONE
            $this->size=$size;
        }
        public function setHeight($height){ // DONE
            $this->height=$height;
        }
        public function setWidth($width){ // DONE
            $this->width=$width;
        }
        public function setLength($length){ // DONE
            $this->length=$length;
        }
        public function setWeight($weight){ // DONE
            $this->weight=$weight;
        }
        public function setImage($image){ // DONE
            $this->image=$image;
        }

        // CREATE DATA
        public function insert(){
            $sql = "INSERT INTO $this->table(barcode, name, price, size, height, width, length, weight, image) VALUES(:barcode, :name, :price, :size, :height, :width, :length, :weight, :image)"; // DONE
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':barcode', $this->barcode); // DONE
            $stmt->bindParam(':name', $this->name); // DONE
            $stmt->bindParam(':price', $this->price); // DONE
            $stmt->bindParam(':size', $this->size); // DONE
            $stmt->bindParam(':height', $this->height); // DONE
            $stmt->bindParam(':width', $this->width); // DONE
            $stmt->bindParam(':length', $this->length); // DONE
            $stmt->bindParam(':weight', $this->weight); // DONE
            $stmt->bindParam(':image', $this->image); // DONE


            return $stmt->execute();
        }
    }
?>