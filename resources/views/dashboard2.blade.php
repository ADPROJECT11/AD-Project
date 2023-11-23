<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--
    <link rel="stylesheet" href="{{ asset('css/dashboard.css')}}">
    -->
    @vite('resources/css/app.css')
    <!-- Load icon library -->
    <title>MenuList</title>
</head>

<body class="flex flex-row bg-gray-200">

    <div class="w-[20%] h-full" id="navbar">
        <div class="w-[2%] h-full fixed bg-gradient-to-b from-pigment-indigo-500 to-pigment-indigo-400" id="purplearea"></div>
        <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
            <div class="font-script text-[40px] text-pigment-indigo-500 text-center h-1/4 flex justify-center items-center" id="molekcafe">Molek</br>Cafe</div>
            <div class="flex flex-col justify-around items-start text-black">
                <a class="flex flex-row" href="#"><img class="mr-[10px]" src="{{ asset('image/reservation.png')}}" width="35px" height="35px">Dashboard</a>
                <a class="flex flex-row" href="adminmenu"><img class="mr-[10px]" src="{{ asset('image/menu.png')}}" width="35px" height="35px">Menu</a>
                <a class="flex flex-row" href="account"><img class="mr-[10px]" src="{{ asset('image/account.png')}}" width="35px" height="35px">Account</a>
            </div>
            <div class="logout">
                <a class="flex flex-row" href="logout"><img class="mr-[10px]" src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
            </div>
        </div>
    </div>



    <div id="main">
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

    </div>

    <script>
    </script>
</body>

</html>