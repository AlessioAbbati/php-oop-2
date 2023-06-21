<?php

$arrCategory = [
    new category('dog'),
    new category('cat'),
];

$arrTaste = [
    new taste('chicken'),
    new taste('pork'),
    new taste('salmon'),
    new taste('tuna'),
    new taste('shrimp'),
    new taste('lamb'),
    new taste('beef'),
    new taste('rabbit'),
];

$foods = [
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
        'taste' => [0, 1, 6],
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
        'taste' => [2, 3, 4],
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
    //     'category' => [1],
    // ],

];

$arrFood = [];
foreach ($foods as $food) {
    $arrCategories = [];
    foreach ($food['category'] as $index) {
        $arrCategories[] = $arrCategory[$index];
    }
    $arrTastes = [];
    foreach ($food['taste'] as $index) {
        $arrTastes[] = $arrTaste[$index];
    }

    $arrFood [] = new food(
        $food['image'],
        $food['name'],
        $food['description'],
        $food['availability'],
        $food['price'],
        $food['weight'],
        $food['type'],
        $food['age'],
        $food['category'],
        $food['taste'],
    );
}

var_dump($arrFood);