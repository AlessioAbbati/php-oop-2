<?php

$arrCategory = [
    new category('dog'),
    new category('cat'),
];

$products = [
    [
        'image' => 'food1.jpg',
        'name' => 'Dog Food 1',
        'description' => 'Premium dog food for all breeds',
        'availability' => 'In stock',
        'price' => 20,
        'weight' => 10,
        'type' => 'Dry',
        'age' => 'Adult',
        'category' => [0],
    ],
    [
        'image' => 'food2.jpg',
        'name' => 'Cat Food 1',
        'description' => 'Healthy cat food for all ages',
        'availability' => 'Out of stock',
        'price' => 15,
        'weight' => 5,
        'type' => 'Wet',
        'age' => 'Kitten',
        'category' => [1],
    ],
    // [
    //     'image' => 'game1.jpg',
    //     'name' => 'Interactive Toy',
    //     'description' => 'Engaging toy for dogs',
    //     'availability' => 'In stock',
    //     'price' => 30,
    //     'age' => 'Adult',
    //     'dimension' => 'Large',
    //     'category' => [0],
    // ],
    // [
    //     'image' => 'game2.jpg',
    //     'name' => 'Feather Teaser',
    //     'description' => 'Interactive toy for cats',
    //     'availability' => 'In stock',
    //     'price' => 12,
    //     'age' => 'Kitten',
    //     'dimension' => 'Small',
    //     'category' => [1],
    // ],
    // [
    //     'image' => 'kennel1.jpg',
    //     'name' => 'Plastic Dog Kennel',
    //     'description' => 'Durable and easy to clean dog kennel',
    //     'availability' => 'In stock',
    //     'price' => 80,
    //     'dimension' => 'Medium',
    //     'type' => 'Outdoor',
    //     'category' => [0],
    // ],
    // [
    //     'image' => 'kennel2.jpg',
    //     'name' => 'Wooden Cat House',
    //     'description' => 'Stylish cat house for indoor use',
    //     'availability' => 'Out of stock',
    //     'price' => 100,
    //     'dimension' => 'Small',
    //     'type' => 'Indoor',
    // ],

];

$arrProduct = [];
foreach ($products as $product) {
    $arrCategories = [];
    foreach ($product['category'] as $index) {
        $arrCategories[] = $arrCategory[$index];
    }

    $arrProduct [] = new product(
        $product['image'],
        $product['name'],
        $product['description'],
        $product['availability'],
        $product['price'],
        $product['weight'],
        $product['type'],
        $product['age'],
        $product['category'],
    );
}

var_dump($arrProduct);