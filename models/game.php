<?php

class game extends product {
    public function __construct(
        public string $age,
        public string $dimension,
        public array $type,
    )
    {
        
    }
}