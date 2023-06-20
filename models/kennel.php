<?php

class kennel extends product {
    public function __construct(
        public array $material,
        public string $dimension,
        public string $type,
    )
    {
        
    }
}