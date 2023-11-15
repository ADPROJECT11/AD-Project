<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @media screen and (max-width: 720px) {}
    </style>
    <script>
        //temporary js script as reference to future php script
        var count = 0;

        function add() {
            count += 1;
            if (count > 99) {
                count = 99;
            }
            document.getElementById("count").innerHTML = count;
        }

        function minus() {
            count -= 1;
            if (count < 0) {
                count = 0;
            }
            document.getElementById("count").innerHTML = count;
        }
    </script>
    <title>Menu</title>
</head>

<body class="bg-gray-200 ">
    <div class="w-full px-6 py-4 shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
        <div class="return">
            <a href=cusmenu><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
        </div>
    </div>

    <div class="flex flex-col items-center">
        <div class="w-11/12 mt-8 bg-white shadow-md max-w-md rounded-xl">
            <img class="rounded-xl" src="{{ asset('image/food.jpg')}}">
        </div>

        <div class="flex flex-col w-11/12 px-5 py-5 -mt-8 mb-28 bg-white shadow-md max-w-md rounded-xl">
            <div class="w-full flex justify-between items-center">
                <h1 class="text-2xl font-bold">F01. Fish & Chips</h1>
                <h2 class="text-sm font-bold">RM 13.00</h2>
            </div>

            <hr class="w-full mx-auto my-3 h-1 bg-gray-200 border-0 rounded">

            <div class="w-full">
                <div class="flex flex-row justify-between">
                    <div>
                        <h2 class="text-xl font-bold">Add Topping</h1>
                            <p class="text-sm text-gray-600">Select one of the options</p>
                    </div>
                    <div class="w-20 my-auto bg-pigment-indigo-500 shadow-md max-w-md rounded-2xl">
                        <p class="text-center text-white text-sm my-1">Required</p>
                    </div>
                </div>
                <form class="mt-3" action="/topping.php">
                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping1" name="sauce" value="no">
                    <label class="ml-2 text-lg align-middle" for="topping1">No Sauce</label><br>
                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping2" name="sauce" value="bbq">
                    <label class="ml-2 text-lg align-middle" for="topping2">BBQ Sauce</label><br>
                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping3" name="sauce" value="korean">
                    <label class="ml-2 text-lg align-middle" for="topping3">Korean Spicy Sauce</label><br>
                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping4" name="sauce" value="salted">
                    <label class="ml-2 text-lg align-middle" for="topping4">Salted Egg Sauce</label><br>
                </form>
            </div>

            <hr class="w-full mx-auto my-3 h-1 bg-gray-200 border-0 rounded">

            <div class="w-full">
                <div class="flex flex-row justify-between">
                    <h2 class="text-xl font-bold">Add-On</h1>
                        <div class="w-20 my-auto bg-gray-500 shadow-md max-w-md rounded-2xl">
                            <p class="text-center text-white text-sm my-1">Optional</p>
                        </div>
                </div>
                <div class="flex flex-row justify-between">
                    <form class="mt-3" action="/addon.php">
                        <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon1" name="addon" value="spaghetti">
                        <label class="ml-2 text-lg align-middle" for="addon1">Add Spaghetti</label><br>
                        <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon2" name="addon" value="meat">
                        <label class="ml-2 text-lg align-middle" for="addon2">Add Meat</label><br>
                        <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon3" name="addon" value="egg">
                        <label class="ml-2 text-lg align-middle" for="addon3">Add Egg</label><br>
                        <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon4" name="addon" value="fries">
                        <label class="ml-2 text-lg align-middle" for="addon4">Add French Fries</label><br>
                    </form>
                    <div class="mt-3 text-center align-middle">
                        <p class="text-gray-700 leading-7">+ RM 2.00</p>
                        <p class="text-gray-700 leading-7">+ RM 3.00</p>
                        <p class="text-gray-700 leading-7">+ RM 1.00</p>
                        <p class="text-gray-700 leading-7">+ RM 2.00</p>
                    </div>
                </div>
            </div>

            <hr class="w-full mx-auto my-3 h-1 bg-gray-200 border-0 rounded">
            
            <div class="w-full">
                <h2 class="text-xl font-bold">Special Request</h1>
                    <p class="text-sm text-gray-600">Please let us know if you are allergic to any anything or require us to avoid anything.</p>
                    <form class="mt-3" action="/request.php">
                        <textarea class="w-full h-20 p-2 border-2 border-pigment-indigo-400 rounded-md focus:border-pigment-indigo-500" name="request" placeholder="e.g. No peanut"></textarea>
                    </form>
            </div>
        </div>
    </div>

    <div class="w-full px-8 py-3 fixed inset-x-0 bottom-0 shadow-inner bg-pigment-indigo-100">
        <div class="flex flex-row justify-between">
            <div class="flex flex-row justify-center items-center text-center">
                <button class="text-5xl text-pigment-indigo-400" onclick="minus()"><img id="minus" src="{{asset('image/minus.png')}}" width="20px" height="20px"></button>
                <p class="inline-block w-10 h-10 text-3xl font-bold mx-3 bg-pigment-indigo-100 border-2 border-pigment-indigo-500 rounded-lg shadow-md" id="count">0</p>
                <button class="text-5xl text-pigment-indigo-400" onclick="add()"><img id="add" src="{{asset('image/add.png')}}" width="20px" height="20px"></button>
            </div>
            <form method="post" name="addcart">
                <button class="inline-block px-4 py-2 text-center text-xl font-bold bg-pigment-indigo-400 border-4 border-pigment-indigo-500 text-white rounded-lg shadow-md">Add to Cart</button>
            </form>
        </div>
    </div>
</body>

</html>