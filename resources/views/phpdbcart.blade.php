<?php

$cartItems = [
    [
        'id' => 1,
        'fID' => 'F01',
        'foodname' => 'Fish & Chips',
        'description' => '+ No sauce',
        'price' => '13.00',
        'categories' => 'food',
        'quantity' => 1
    ],
    [
        'id' => 2,
        'fID' => 'F02',
        'foodname' => 'Burger',
        'description' => '+ No sauce',
        'price' => '8.00',
        'categories' => 'food',
        'quantity' => 1
    ]
    // Add more items as needed
];

foreach ($cartItems as $cartItem) {
    DB::insert(
        'INSERT INTO cart (id, fID, foodname, description, price, categories, quantity) VALUES (?, ?, ?, ?, ?, ?, ?)',
        [
            $cartItem['id'],
            $cartItem['fID'],
            $cartItem['foodname'],
            $cartItem['description'],
            $cartItem['price'],
            $cartItem['categories'],
            $cartItem['quantity']
        ]
    );
}
