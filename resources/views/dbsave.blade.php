<?php

$menuItems = [
    ['F01', 'Fish & Chips', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 12.99, 'food'],
    ['F02', 'Burger', 'Delicious beef patty with lettuce, cheese, and special sauce', 8.99, 'food'],
    ['F03', 'Caesar Salad', 'Fresh romaine lettuce with croutons, parmesan cheese, and Caesar dressing', 6.99, 'food'],
    ['F04', 'Pizza Margherita', 'Classic pizza topped with tomato sauce, mozzarella, and basil', 10.99, 'food'],
    ['F05', 'Lemonade', 'Refreshing lemon-flavored drink', 2.99, 'beverages'],
    ['F06', 'Cappuccino', 'Classic Italian coffee with milk foam', 3.99, 'beverages'],
    ['F07', 'Iced Tea', 'Chilled tea with a hint of lemon', 2.49, 'beverages'],
    ['F08', 'Cheesecake', 'Creamy cheesecake with a crumbly graham cracker crust', 4.99, 'dessert'],
    ['F09', 'Steak', 'Juicy steak cooked to your preference', 19.99, 'food'],
    ['F10', 'Mojito', 'Refreshing cocktail with rum, lime, mint, and soda water', 7.99, 'beverages'],
];

foreach ($menuItems as $menuItem) {
    DB::insert('INSERT INTO menu (id, foodname, description, price, categories) VALUES (?, ?, ?, ?, ?)', $menuItem);
}
?>






