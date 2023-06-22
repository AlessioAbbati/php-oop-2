<?php

trait shipping {
    protected int $weight;

    public function getShippingPrice() {
        return $this->weight * 5;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight() {
        $this->weight = $weight;
        return $this;
    }
}