<?php

class Product {
    private $photo;
    private $name;
    private $sizes = [];  // Array to hold multiple sizes
    private $price;
    private $status;  // This might be 'available', 'out of stock', etc.

    // Constructor
    public function __construct($photo, $name, array $sizes, $price, $status) {
        $this->photo = $photo;
        $this->name = $name;
        $this->sizes = $sizes;
        $this->price = $price;
        $this->status = $status;
    }

    // Getter for the photo
    public function getPhoto() {
        return $this->photo;
    }

    // Setter for the photo
    public function setPhoto($photo) {
        $this->photo = $photo;
    }

    // Getter for the name
    public function getName() {
        return $this->name;
    }

    // Setter for the name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter for the sizes
    public function getSizes() {
        return $this->sizes;
    }

    // Setter for the sizes
    public function setSizes(array $sizes) {
        $this->sizes = $sizes;
    }

    // Getter for the price
    public function getPrice() {
        return $this->price;
    }

    // Setter for the price
    public function setPrice($price) {
        $this->price = $price;
    }

    // Getter for the status
    public function getStatus() {
        return $this->status;
    }

    // Setter for the status
    public function setStatus($status) {
        $this->status = $status;
    }
}

// Example usage
// $product = new Product("image.jpg", "T-Shirt", ["S", "M", "L"], 19.99, "Available");

// echo "Product: " . $product->getName() . "\n";
// echo "Sizes Available: " . implode(", ", $product->getSizes()) . "\n";
// echo "Price: $" . $product->getPrice() . "\n";
// echo "Status: " . $product->getStatus() . "\n";
// 


?>
