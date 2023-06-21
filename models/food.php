<?php

class food
{

    public function __construct(
        public string $image,
        public string $name,
        public string $description,
        public string $availabiliy,
        public int $price,
        public string $weight,
        public string $type,
        public string $age,
        public array $category,
        public array $taste,
    ) 
    {

    }
}
