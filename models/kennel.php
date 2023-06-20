<?php

class kennel extends product {
    public function __construct(
        public string $material,
        public string $dimension,
        public string $type,
    )
    {
        
    }
}