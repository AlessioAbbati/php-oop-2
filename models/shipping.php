<?php

trait shipping {
    protected int $weight;

    public function getShippingPrice() {
        return $this->weight * 5;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        if ($weight > 0) {
            $this->weight = $weight;
        } else {
            throw new Exception('peso <=0');
        }
        
        return $this;
    }
}