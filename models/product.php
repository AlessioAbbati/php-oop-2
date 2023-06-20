<?php

class product {

    public function __construct(
        public string $category, 
        private int $price, 
        public string $img, 
        public string $name,
        public string $description,
        public string $availability,
        )
    {
        
    }
}