<?php 

class food extends product {
    public function __construct(
        public string $weight,
        public string $type,
        public int $age,
        public string $taste,
    )
    {
        
    }

}